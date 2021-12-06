<?php 
	include_once "../core/CommentC.php"; 
	$commentC = new CommentC();
	$count = $commentC->getCountComment();
	foreach ($count as $cc ) {
		$countComment = $cc['count'];
	}
	$count = $commentC->getCountPublisher();
	foreach ($count as $cc ) {
		$countPublisher = $cc['count'];
	}
?>
<!DOCTYPE html>
<html lang="en">
<!-- <head></head> -->
<?php include "head.php"; ?>


<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->

  <!-- <nav></nav> -->
  <?php include "nav.php"; ?>

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <!-- <aside></aside> -->
  <?php include "sidebar.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Comments List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Comment List</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <input type="text" name="search" id="search" placeholder="Search...">
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="jTable" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Publisher</th>
                    <th>Date</th>
                    <th>Content</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                  	<?php $comments = $commentC->getComments();
                  		foreach ($comments as $comment) {
                  	 ?>
                  <tr>
                    <td><?php echo $comment['publisher']; ?></td>
                    <td><?php echo $comment['createdDate']; ?></td>
                    <td><?php echo $comment['content']; ?></td>
                    <td><a href="adminDeleteComment.php?comment=<?php echo $comment['idComment'] ?>">delete</a></td>
                  </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Publisher</th>
                    <th>Date</th>
                    <th>Content</th>
                    <th>Delete</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- <footer></footer> -->
  <?php include "footer.php"; ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- <script></script> -->
<?php include "script.php"; ?>
<script type="text/javascript">
	$(function() {
	 	$( "#search" ).keyup(function() {
	 		var x = document.getElementById("search").value;
		 	$.ajax({
			  url: "cq9s4d.php",
			  type: 'GET',
			  data: { search: x }
			}).done(function(response) {
	    	var table = $(response).find("#jTable");
                    $('#jTable').empty();
                    $('#jTable').append(table);
			})
		});
	})
</script>
</body>
</html>
