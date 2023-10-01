<?php
include("./db/connect.php");

$id = $_GET['id'];
if ($id) {

  $sql = "select * from login where id = '$id'";
  $result = mysqli_query($mysqli, $sql);
  $login = mysqli_fetch_array($result);
}
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
          <form id="quickForm " method="post" action="user/xuly.php?id=<?php echo $login['id'] ?>" enctype="multipart/form-data">
            <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Họ tên</label>
                <input type="text" name="fullname" value="<?php echo $login['fullname'] ?>" class="form-control" id="fullname" >
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Tài khoản đăng nhập<span style="color: red;">*</span> </label>
                <input type="text" name="username" class="form-control" value="<?php echo $login['username'] ?>" id="username" >
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Mật khẩu</label>
                <input type="password" name="password" class="form-control" value="<?php echo $login['password'] ?>" id="password" >
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Ảnh</label>
                <input type="file" name="avatar" value="<?php echo $login['avatar'] ?>" class="form-control"
                  id="avatar">
                Ảnh:
                <?php
                if ($login['avatar'] == '') {
                ?>
                <td><i> Đang cập nhập ...</i></td>
                <?php
                } else {
                ?>
                <td><img class="mt-2" style="width: 100px; height: 100px;"
                    src="./uploads/<?php echo $login['avatar'] ?>" alt="">
                </td>

                <?php
                }
                ?>
              </div>
              
              
              <button type="submit" name="editteacher" class="btn btn-success">Thêm</button>

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