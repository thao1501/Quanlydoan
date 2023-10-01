<?php
include('./db/connect.php');
$id=$_GET['id'];
$sql = "SELECT * from students where ";
$classs = mysqli_query($mysqli, $sql);
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
        <!-- Small boxes (Stat box) -->
        <section class="content">
            <div class="container-fluid">
                <!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="index.php?action=addclass" class="btn btn-success">Thêm</a>
                                <h3 class="card-title"></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên lớp</th>
                                            <th>Khoa</th>
                                            <th>Thông tin</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 0;
                                        ?>

                                        <?php
                                        while ($class = mysqli_fetch_array($classs)) {
                                            $i++;
                                        ?>
                                            <tr>
                                                <td>
                                                    <?php echo $i ?>
                                                </td>
                                                <td>
                                                    <?php echo $class['name'] ?>
                                                </td>
                                                <td>
                                                    <?php echo  $class['faculty_name'] ?>
                                                </td>
                                                <td>
                                                   <strong>Khóa:</strong>  <?php echo $class['course_name'] ?>
                                                    <br>
                                                   <strong>Niên khóa:</strong>  <?php echo $class['time'] ?>

                                                </td>
                                    
                                            
                                                <td>
                                                    <a class="btn btn-success" href="index.php?action=editclass&id=<?php echo $class['id'] ?>">Sửa</a>
                                                    <a class="btn btn-warning" href="class/xuly.php?id=<?php echo $class['id'] ?>">Xóa</a>
                                                    <a class="btn btn-warning" href="class/xuly.php?id=<?php echo $class['id'] ?>">Chi tiết</a>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>


                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
        </section>
        <div class="row">

        </div>
    </div><!-- /.container-fluid -->
</section>