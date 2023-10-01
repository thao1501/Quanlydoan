<!-- Content Header (Page header) -->
<?php
include('./db/connect.php');

$sql = "select * from faculty";
$facultys = mysqli_query($mysqli, $sql);
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Quản lý khoa</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Quản lý khoa</li>
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
                                <a href="index.php?action=addfaculty" class="btn btn-success">Thêm</a>
                                <h3 class="card-title"></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Khoa</th>
                                            <th>Số điện thoại</th>
                                            <th>Ngày thành lập</th>
                                            <th>Mô tả</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 0;
                                        ?>

                                        <?php
                                        while ($faculty = mysqli_fetch_array($facultys, MYSQLI_ASSOC)) {
                                            $i++;
                                        ?>
                                            <tr>
                                                <td>
                                                    <?php echo $i ?>
                                                </td>
                                                <td>
                                                    <?php echo $faculty['name'] ?>
                                                </td>

                                                <td>
                                                    <?php echo $faculty['phone'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $faculty['birthday'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $faculty['note'] ?>
                                                </td>
                                                <td>
                                                    <a class="btn btn-success" href="index.php?action=editfaculty&id=<?php echo $faculty['id'] ?>">Sửa</a>
                                                    <a class="btn btn-warning" href="faculty/xuly.php?id=<?php echo $faculty['id'] ?>">Xóa</a>
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