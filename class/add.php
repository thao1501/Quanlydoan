<?php
$sql = "select * from faculty";
$facultys = mysqli_query($mysqli, $sql);

$sql = "select * from course";
$courses = mysqli_query($mysqli, $sql);
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Quản lý lớp</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Quản lý lớp</li>
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
                        <h3 class="card-title">Thêm lớp</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
               
                    <form id="quickForm " method="post" action="class/xuly.php">
                        <div class="card-body">
                        <?php
                        if (isset($_REQUEST['error'])) {
                            echo '<div class="alert alert-danger">Đã xảy ra lỗi: ' . $_REQUEST['error'] . '</div>';
                        }
                        ?>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên lớp</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Tên lớp">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputPassword1">Khoa</label>
                                <select class="form-control" name="faculty_id">
                                    <option selected>---Chọn khoa---</option>
                                    <?php  while ($faculty = mysqli_fetch_array($facultys, MYSQLI_ASSOC)) { 
                                        ?>
                                    <option value="<?php echo $faculty['id'] ?>"><?php echo $faculty['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Khóa</label>
                                <select class="form-control" name="course_id">
                                <option selected>---Chọn khóa---</option>
                                    <?php  while ($course = mysqli_fetch_array($courses, MYSQLI_ASSOC)) { 
                                        ?>
                                    <option value="<?php echo $course['id'] ?>"><?php echo $course['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <button type="submit" name="addclass" class="btn btn-success">Thêm</button>

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