<?php
$sql = "select * from class";
$classs = mysqli_query($mysqli, $sql);


?>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Quản lý sinh viên</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
              <li class="breadcrumb-item active">Quản lý sinh viên</li>
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
                <h3 class="card-title">Thêm sinh viên</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm " method="post" action="student/xuly.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Tên sinh viên</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Tên sinh viên" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mã sinh viên</label>
                    <input type="text" name="code" class="form-control" id="code" placeholder="Mã sinh viên" required>
                  </div>
                  <div class="form-group">
                                <label for="exampleInputPassword1">Lớp</label>
                                <select class="form-control" name="class_id" required>
                                    <option value="" selected>---Chọn lớp---</option>
                                    <?php  while ($class = mysqli_fetch_array($classs, MYSQLI_ASSOC)) { 
                                        ?>
                                    <option value="<?php echo $class['id'] ?>"><?php echo $class['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                  <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Số điện thoại" required>
                  </div>
                  <div class="form-group">
                    <label for="">Ngày sinh</label>
                    <input type="date" name="birthday" class="form-control" id="birthday"  required>
                  </div>
                  <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" name="address" class="form-control" id="address" placeholder="Địa chỉ" required>
                  </div>
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Tài khoản email" required>
                  </div>
                  <button type="submit" name="addstudent" class="btn btn-success">Thêm</button>

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
    