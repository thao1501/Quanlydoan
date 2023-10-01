<?php
include("./db/connect.php");
$sql = "select * from faculty";
$facultys = mysqli_query($mysqli, $sql);
$id = $_GET['id'];
if ($id) {

  $sql = "select * from teachers where id = '$id'";
  $result = mysqli_query($mysqli, $sql);
  $teacher = mysqli_fetch_array($result);
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
            <h3 class="card-title">Sửa giáo viên</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form id="quickForm " method="post" action="giaovien/xuly.php?id=<?php echo $teacher['id'] ?>"
            enctype="multipart/form-data">
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Mã giáo viên</label>
                <input type="text" name="id" value="<?php echo $teacher['id'] ?>" disabled class="form-control">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Họ tên</label>
                <input type="text" name="name" value="<?php echo $teacher['name'] ?>" class="form-control" id="name"
                  placeholder="Họ tên">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Ảnh</label>
                <input type="file" name="avatar" value="<?php echo $teacher['avatar'] ?>" class="form-control"
                  id="avatar">
                Ảnh:
                <?php
                if ($teacher['avatar'] == '') {
                ?>
                <td><i> Đang cập nhập ...</i></td>
                <?php
                } else {
                ?>
                <td><img class="mt-2" style="width: 100px; height: 100px;"
                    src="./uploads/<?php echo $teacher['avatar'] ?>" alt="">
                </td>

                <?php
                }
                ?>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Ngày sinh</label>
                <input type="date" name="birthday" value="<?php echo $teacher['birthday'] ?>" class="form-control"
                  id="birthday" placeholder="Ngày sinh">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Số điện thoại</label>
                <input type="text" name="phone" class="form-control" value="<?php echo $teacher['phone'] ?>" id="phone"
                  placeholder="Số điện thoại">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Địa chỉ</label>
                <input type="text" name="address" class="form-control" value="<?php echo $teacher['address'] ?>"
                  id="address" placeholder="Địa chỉ">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $teacher['email'] ?>" id="email"
                  placeholder="Email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Khoa</label>
                <select class="form-control" name="faculty_id">
                  <option selected>---Chọn khoa---</option>
                  <?php while ($faculty = mysqli_fetch_array($facultys, MYSQLI_ASSOC)) {
                                    ?>
                  <option <?php if ($faculty['id']==$teacher['faculty_id']):
                                        echo 'selected'; endif ?> value="
                    <?php echo $faculty['id'] ?>">
                    <?php echo $faculty['name'] ?>
                  </option>
                  <?php } ?>
                </select>
              </div>
              <button type="submit" name="editteacher" class="btn btn-success">Sửa</button>

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