<?php 
  include_once "../core/CommentC.php"; 
  $commentC = new CommentC();
  $countComment = 0;
  $countPublisher = 0;
  $countDeleted = 0;
  $count = $commentC->getCountComment();
  foreach ($count as $cc ) {
    $countComment = $cc['count'];
  }
  $count = $commentC->getCountPublisher();
  foreach ($count as $cc ) {
    $countPublisher = $cc['count'];
  }
  $count = $commentC->getCountDeleted();
  foreach ($count as $cc ) {
    $countDeleted = $cc['count'];
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
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $countComment; ?></h3>

                <p>Comments</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $countPublisher; ?><sup style="font-size: 20px"></sup></h3>

                <p>Publishers</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $countDeleted; ?></h3>

                <p>Deleted Comments</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $countDeleted; ?></h3>

                <p>Deleted Comments</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Sales
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                    </li>
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 300px;">
                      <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                   </div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                    <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                  </div>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- DIRECT CHAT -->
            <!--/.direct-chat -->

            <!-- TO DO List -->
            
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

            <!-- Map card -->
            <div hidden="" class="card bg-gradient-primary">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-map-marker-alt mr-1"></i>
                  Visitors
                </h3>
                <!-- card tools -->
               
                <!-- /.card-tools -->
              </div>
              <div class="card-body">
                <div id="world-map" style="height: 250px; width: 100%;"></div>
              </div>
              <!-- /.card-body-->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <div id="sparkline-1"></div>
                    <div class="text-white">Visitors</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-2"></div>
                    <div class="text-white">Online</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-3"></div>
                    <div class="text-white">Sales</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.card -->

            <!-- solid sales graph -->
            <div hidden="" class="card bg-gradient-info">
              
              
              <!-- /.card-body -->
              
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->

           
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
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

<script type="text/javascript">
  var p1 = <?php echo $commentC->countPMonths(1)[0]; ?>;
  var p2 = <?php echo $commentC->countPMonths(2)[0]; ?>;
  var p3 = <?php echo $commentC->countPMonths(3)[0]; ?>;
  var p4 = <?php echo $commentC->countPMonths(4)[0]; ?>;
  var p5 = <?php echo $commentC->countPMonths(5)[0]; ?>;
  var p6 = <?php echo $commentC->countPMonths(6)[0]; ?>;
  var p7 = <?php echo $commentC->countPMonths(7)[0]; ?>;
  var p8 = <?php echo $commentC->countPMonths(8)[0]; ?>;
  var p9 = <?php echo $commentC->countPMonths(9)[0]; ?>;
  var p10 = <?php echo $commentC->countPMonths(10)[0]; ?>;
  var p11 = <?php echo $commentC->countPMonths(11)[0]; ?>;
  var p12 = <?php echo $commentC->countPMonths(12)[0]; ?>;
  
  var c1 = <?php echo $commentC->countMonths(1)[0]; ?>;
  var c2 = <?php echo $commentC->countMonths(2)[0]; ?>;
  var c3 = <?php echo $commentC->countMonths(3)[0]; ?>;
  var c4 = <?php echo $commentC->countMonths(4)[0]; ?>;
  var c5 = <?php echo $commentC->countMonths(5)[0]; ?>;
  var c6 = <?php echo $commentC->countMonths(6)[0]; ?>;
  var c7 = <?php echo $commentC->countMonths(7)[0]; ?>;
  var c8 = <?php echo $commentC->countMonths(8)[0]; ?>;
  var c9 = <?php echo $commentC->countMonths(9)[0]; ?>;
  var c10 = <?php echo $commentC->countMonths(10)[0]; ?>;
  var c11 = <?php echo $commentC->countMonths(11)[0]; ?>;
  var c12 = <?php echo $commentC->countMonths(12)[0]; ?>;

  var comment = <?php echo $countComment; ?>;
  var publisher = <?php echo $countPublisher; ?>;
  var deleted = <?php echo $countDeleted; ?>;

</script>
<!-- <script></script> -->
<?php include "script.php"; ?>

</body>
</html>
