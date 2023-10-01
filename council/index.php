<?php
include('./db/connect.php');
$sql = "SELECT council.*, 
               teachers1.name AS teacher1_name, 
               teachers2.name AS teacher2_name, 
               teachers3.name AS teacher3_name 
        FROM council
        LEFT JOIN teachers AS teachers1 ON council.teacher_id1 = teachers1.id
        LEFT JOIN teachers AS teachers2 ON council.teachers_id2 = teachers2.id
        LEFT JOIN teachers AS teachers3 ON council.teachers_id3 = teachers3.id";



$classs = mysqli_query($mysqli, $sql);
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Quản lý hội đồng</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Quản lý hội đồng</li>
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
                                <a href="index.php?action=addcouncil" class="btn btn-success">Thêm</a>
                                <h3 class="card-title"></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên hội đồng</th>
                                            <th>Niên khóa</th>
                                            <th>Thành viên </th>
                                            <th>Ghi chú</th>
                                            <th>Hành Động</th>
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
                                                    <?php echo  $class['academic_year'] ?>
                                                </td>
                                                <td>
                                                   <strong>Thành viên 1:</strong> <?php echo $class['teacher1_name'] ?>
                                                    <br>
                                                   <strong>Thành viên 2:</strong> <?php echo $class['teacher2_name'] ?>
                                                   <br>
                                                   <strong>Thành viên 3:</strong> <?php echo $class['teacher3_name'] ?>
                                                </td>
                                    
                                                <td>
                                                <strong>Ngày bắt đầu:</strong> <?php echo $class['star_date'] ?>
                                                    <br>
                                                   <strong>Thời gian:</strong> <?php echo $class['star_time'] ?>
                                                   <br>
                                                   <strong>Phòng:</strong> <?php echo $class['rooms'] ?>
                                                </td>
                                                </td>
                                                <td>
                                                    <a class="btn btn-success" href="index.php?action=editcouncil&id=<?php echo $class['id'] ?>">Sửa</a>
                                                    <a class="btn btn-warning" href="council/xuly.php?id=<?php echo $class['id'] ?>">Xóa</a>
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