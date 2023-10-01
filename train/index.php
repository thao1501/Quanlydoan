<!-- Content Header (Page header) -->
<?php
include('./db/connect.php');

$sql = "select * from train";
$trains = mysqli_query($mysqli, $sql);
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Quản lý hệ đào tạo </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Quản lý hệ đào tạo</li>
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
                                <a href="index.php?action=addtrain" class="btn btn-success">Thêm</a>
                                <h3 class="card-title"></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Mã hệ đào tạo</th>
                                            <th>Tên hệ đào tạo</th>
                                            <th>Hệ số</th>
                                            <th>Số kỳ</th>
                                            <th>Ngày bắt đầu</th>
                                            <th>Ngày kết thúc</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 0;
                                        ?>

                                        <?php
                                        while ($train = mysqli_fetch_array($trains, MYSQLI_ASSOC)) {
                                            $i++;
                                        ?>
                                            <tr>
                                                <td>
                                                    <?php echo $i ?>
                                                </td>
                                                <td>
                                                    <?php echo $train['tenhedt'] ?>
                                                </td>
                                                <td>
                                                    <?php echo  $train['mahedt'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $train['heso'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $train['soky'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $train['tgbatdau'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $train['tgketthuc'] ?>
                                                </td>
                                                <td>
                                                    <a class="btn btn-success" href="index.php?action=edittrain&id=<?php echo $train['id'] ?>">Sửa</a>
                                                    <a class="btn btn-warning" href="train/xuly.php?id=<?php echo $train['id'] ?>">Xóa</a>
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