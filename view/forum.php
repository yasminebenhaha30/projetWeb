<?php 
	include_once "../core/CommentC.php"; 

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    include_once "../core/CommentC.php";
	    include_once "../entity/Comment.php";
	    $comment = new Comment(NULL, $_POST['publisher'], $_POST['content'], date("Y-m-d"));
	    $commentC = new CommentC();
	    $myCommentId = $commentC->insertComment($comment);
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Projet Web : Forum</title>
</head>
<body>
	<form method="POST" action="">
		<input type="text" name="publisher" placeholder="Your name..."> <br>
		<textarea name="content" placeholder="Message..."></textarea><br>
		<input type="submit" name="submit" value="Submit">
	</form>
	<br><br>
	<?php 
		$commentC = new CommentC();
		$comments = $commentC->getComments();
		foreach ($comments as $comment) {
	?>
	<p> <?php echo $comment['publisher'] . " : " . $comment['createdDate'] . " : " . $comment['content'] . "  "; ?> </p> 
	<?php if (isset($myCommentId) && $myCommentId == $comment['idComment']) { ?>
		<a href="deleteComment.php?comment=<?php echo $comment['idComment']; ?>">delete</a>
	<?php } ?>
	<br> <br>
	<?php
		}
	 ?>
</body>
</html>