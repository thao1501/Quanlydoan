<?php
include('./db/connect.php');

$sql = "select * from dsdetai";
$courses = mysqli_query($mysqli, $sql);
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Danh sách đề tài</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Danh sách đề tài</li>
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
                                <a href="index.php?action=adddetai" class="btn btn-success">Thêm</a>
                                <h3 class="card-title"></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên đề tài</th>
                                            <th>Thời gian</th>
                                            <th>Sinh viên thực hiện</th>
                                            <th>Giảng viên hướng dẫn</th>
                                            <th>Mô tả</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 0;
                                        ?>

                                        <?php
                                        while ($course = mysqli_fetch_array($courses, MYSQLI_ASSOC)) {
                                            $i++;
                                        ?>
                                            <tr>
                                                <td>
                                                    <?php echo $i ?>
                                                </td>
                                                <!--INSERT INTO `dsdetai`(`id`, `maDT`, `tenDT`, `thoiGianDB`, `thoiGianKT`, `nguoiThuchien`, `giangVienhd`, `motaDT`) -->
                                                <td>
                                                    <?php echo $course['tenDT'] ?>
                                                </td>
                                                <td>
                                                    <?php echo  $course['thoiGianDB'] ?>-<br><?php echo  $course['thoiGianKT'] ?>
                                                </td>
                                                <td>
                                                    <?php echo  $course['nguoiThuchien'] ?>
                                                </td>
                                                <td>
                                                    <?php echo  $course['giangVienhd'] ?>
                                                </td>
                                
                                                <td>
                                                    <?php echo $course['motaDT'] ?>
                                                </td>
                                                <td>
                                                    <a class="btn btn-success" href="index.php?action=editdetai&id=<?php echo $course['id'] ?>">Sửa</a>
                                                    <a class="btn btn-warning" href="dsdetai/xuly.php?id=<?php echo $course['id'] ?>">Xóa</a>
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