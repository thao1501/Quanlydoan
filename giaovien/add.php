<?php
$sql = "select * from faculty";
$facultys = mysqli_query($mysqli, $sql);


?>
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Quản lý giáo viên</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
          <li class="breadcrumb-item active">Quản lý giáo viên</li>
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
      <!-- left column -->
      <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Thêm giáo viên</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form id="quickForm " method="post" action="giaovien/xuly.php" enctype="multipart/form-data">
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Họ tên <span style="color: red;">*</span> </label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Họ tên" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Ảnh</label>
                <input type="file" name="avatar" class="form-control" id="avatar" accept="image/*">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Ngày sinh</label>
                <input type="date" name="birthday" class="form-control" id="birthday" required placeholder="Ngày sinh">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Số điện thoại</label>
                <input type="text" name="phone" class="form-control" id="phone" required placeholder="Số điện thoại">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Địa chỉ</label>
                <input type="text" name="address" class="form-control" id="address" required placeholder="Địa chỉ">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" name="email" class="form-control" id="email" required placeholder="Email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Khoa</label>
                <select class="form-control" name="faculty_id" required>
                  <option value="" selected>---Chọn khoa---</option>
                  <?php while ($faculty = mysqli_fetch_array($facultys, MYSQLI_ASSOC)) {
                                    ?>
                  <option value="<?php echo $faculty['id'] ?>">
                    <?php echo $faculty['name'] ?>
                  </option>
                  <?php } ?>
                </select>
              </div>
              <button type="submit" name="addteacher" class="btn btn-success">Thêm</button>

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