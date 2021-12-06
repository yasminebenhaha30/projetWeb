<?php 
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
    include "../core/CommentC.php";
    include "../entity/Comment.php";
    if (isset($_GET['comment'])) {
        $commentC = new CommentC();
        $commentC->deleteComment($_GET['comment']);
    }
    header('Location: front.php');
}
?>