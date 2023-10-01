<?php
$sql1 = "select * from course";
$courses = mysqli_query($mysqli, $sql1);
$sql = "select * from teachers";
$teachers1 = mysqli_query($mysqli, $sql);
$teachers2 = mysqli_query($mysqli, $sql);
$teachers3 = mysqli_query($mysqli, $sql);
?>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Quản lý hội đồng</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
              <li class="breadcrumb-item active">Quản lý hội đồng</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content --><section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Thêm hội đồng</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm " method="post" action="council/xuly.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Tên hội đồng</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Tên hội đồng" required>
                  </div>
                  <div class="form-group">
                                <label for="exampleInputPassword1">Thành viên 1</label>
                                <select class="form-control" name="teacher_id1" required>
                                    <option value="" selected>---Chọn giảng viên---</option>
                                    <?php  while ($teacher1 = mysqli_fetch_array($teachers1)) { 
                                        ?>
                                    <option value="<?php echo $teacher1['id'] ?>"><?php echo $teacher1['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Thành viên 2</label>
                                <select class="form-control" name="teacher_id2" required>
                                    <option value="" selected>---Chọn giảng viên---</option>
                                    <?php  while ($teacher2 = mysqli_fetch_array($teachers2)) { 
                                        ?>
                                    <option value="<?php echo $teacher2['id'] ?>"><?php echo $teacher2['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Thành viên 3</label>
                                <select class="form-control" name="teacher_id3" required>
                                    <option value="" selected>---Chọn giảng viên---</option>
                                    <?php  while ($teacher3 = mysqli_fetch_array($teachers3)) { 
                                        ?>
                                    <option value="<?php echo $teacher3['id'] ?>"><?php echo $teacher3['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Niên khóa</label>
                                <select class="form-control" name="academic_year">
                                <option selected>---Chọn niên khóa---</option>
                                    <?php  while ($course = mysqli_fetch_array($courses, MYSQLI_ASSOC)) { 
                                        ?>
                                    <option value="<?php echo $course['time'] ?>"><?php echo $course['time'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                              <label for="">Ngày bắt đầu</label>
                              <input type="date" name="star_date" class="form-control" id="iddate"  required>
                            </div>
                            <div class="form-group">
                              <label for="">Thời gian</label>
                              <input type="text" name="star_time" class="form-control" id="idtime"  required>
                            </div>
                            <div class="form-group">
                              <label for="">Địa Điểm</label>
                              <input type="text" name="rooms" class="form-control" id="idroom"  required>
                            </div>

                                
                  
                  <button type="submit" name="addcouncil" class="btn btn-success">Thêm</button>
                  <button type="submit" name="cancel" class="btn btn-success" formnovalidate>cancel</button>  
                <!-- /.card-body -->
                <div class="card-footer">
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    