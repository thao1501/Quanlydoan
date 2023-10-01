<?php
$sql = "select * from faculty";
$facultys = mysqli_query($mysqli, $sql);

$sql = "select * from course";
$courses = mysqli_query($mysqli, $sql);

$id =$_GET['id'];
    if($id){

        $sql = "select * from class where id = '$id'";
        $result = mysqli_query($mysqli, $sql);
        $class = mysqli_fetch_array($result);
    }
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
                        <h3 class="card-title">Sửa lớp</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="quickForm " method="post" action="class/xuly.php?id=<?php echo $class['id'] ?>">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên lớp</label>
                                <input type="text" value="<?php echo $class['name'] ?>" name="name" class="form-control" id="name" placeholder="Tên lớp">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputPassword1">Khoa</label>
                                <select class="form-control" name="faculty_id">
                                    <option selected>---Chọn khoa---</option>
                                    <?php  while ($faculty = mysqli_fetch_array($facultys, MYSQLI_ASSOC)) { 
                                        ?>
                                    <option <?php if($faculty['id'] == $class['faculty_id']):echo 'selected'; endif ?> value="<?php echo $faculty['id'] ?>"><?php echo $faculty['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Khóa</label>
                                <select class="form-control" name="course_id">
                                <option selected>---Chọn khóa---</option>
                                    <?php  while ($course = mysqli_fetch_array($courses, MYSQLI_ASSOC)) { 
                                        ?>
                                    <option <?php if($course['id'] == $class['course_id']):echo 'selected'; endif ?> value="<?php echo $course['id'] ?>"><?php echo $course['time'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <button type="submit" name="editclass" class="btn btn-success">Sửa</button>

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