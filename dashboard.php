<!-- Content Header (Page header) -->
<?php
 $faculty = "select count(id) AS soluong from faculty;";
 $faculty = mysqli_query($mysqli,$faculty);
 $facultycount = mysqli_fetch_array($faculty);

 $student = "select count(id) AS soluong from student;";
 $student = mysqli_query($mysqli,$student);
 $studentcount = mysqli_fetch_array($student);

 $teacher = "select count(id) AS soluong from teachers;";
 $teacher = mysqli_query($mysqli,$teacher);
 $teachercount = mysqli_fetch_array($teacher);

 $project = "select count(id) AS soluong from project;";
 $project = mysqli_query($mysqli,$project);
 $projectcount = mysqli_fetch_array($project);
?>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <?php 
             $date_array = getdate();
             
             $formated_date  = "Ngày hiện tại: ";
          
             $formated_date .= $date_array['mday'] . "/";
          
             $formated_date .= $date_array['mon'] . "/";
          
             $formated_date .= $date_array['year'];
             date_default_timezone_set("America/New_York");
             $time= date("h:i:sa");
            
            ?>
            <h1 class="m-0">Thời gian hiện tại: <?php echo $time?> <br> <?php echo $formated_date ?></h1>
            <?php if(isset($_COOKIE['success'])){ ?>
              <span style="color: #008000;"><?php echo $_COOKIE['success'] ?></span>
            <?php } ?>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
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
                <h3><?php echo $facultycount['soluong'] ?></h3>

                <p>Số lượng khoa</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="index.php?action=faculty" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $teachercount['soluong'] ?></h3>

                <p>Số lượng giảng viên</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="index.php?action=giaovien" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $studentcount['soluong'] ?></h3>

                <p>Số lượng sinh viên</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="index.php?action=student" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $projectcount['soluong'] ?></h3>

                <p>Tổng số đồ án</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="index.php?action=project" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
         
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-12 connectedSortable">

            <!-- Map card -->
            <div class="card bg-gradient-primary">
              
              
              <!-- /.card-body-->
              <div hidden class="card-footer bg-transparent">
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
            
            <!-- /.card -->

            <!-- Calendar -->
            <div class="card bg-gradient-success">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                      <i class="fas fa-bars"></i>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a href="#" class="dropdown-item">Add new event</a>
                      <a href="#" class="dropdown-item">Clear events</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>