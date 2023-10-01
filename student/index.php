<!-- Content Header (Page header) -->
<?php
include('./db/connect.php');

$sql = "select student.*, class.name as class_name, faculty.name as faculty_name from student join class on class.id = student.class_id LEFT JOIN faculty on faculty.id = class.faculty_id";
$students = mysqli_query($mysqli, $sql);
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Quản lý sinh viên</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Quản lý sinh viên</li>
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
                                <a href="index.php?action=addstudent" class="btn btn-success">Thêm</a>
                                <h3 class="card-title"></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Mã sinh viên</th>
                                            <th>Tên sinh viên</th>
                                            <th>Thông tin</th>
                                            <th>Thông tin khác</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 0;
                                        ?>

                                        <?php
                                        while ($student = mysqli_fetch_array($students, MYSQLI_ASSOC)) {
                                            $i++;
                                        ?>
                                            <tr>
                                                <td>
                                                    <?php echo $i ?>
                                                </td>
                                                <td>
                                                    <?php echo $student['code'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $student['name'] ?>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li>
                                                            <i class="fa-solid fa-phone"></i>
                                                            <?php echo $student['phone'] ?>
                                                        </li>
                                                        <li><i class="fa-solid fa-envelope"></i>
                                                            <?php echo $student['email'] ?>
                                                        </li>
                                                        <li><i class="fa-solid fa-location-dot"></i>
                                                            <?php echo $student['address'] ?>
                                                        </li>
                                                        <li><i class="fa-solid fa-cake-candles"></i>
                                                            <?php echo $student['birthday'] ?>
                                                        </li>
                                                    </ul>

                                                </td>

                                                <td>
                                                    <strong>Lớp:</strong>  <?php echo $student['class_name'] ?> <br>
                                                    <strong>Khoa:</strong>  <?php echo $student['faculty_name'] ?>
                                                </td>
                                                <td>
                                                    <a class="btn-danger btn btn-sm" href="index.php?action=editstudent&id=<?php echo $student['id'] ?>"><i class="fa-solid fa-pen"></i></a>
                                                    <a class="btn btn-warning btn-sm" onClick="deletestudent(<?php echo $student['id']; ?>)" name="Delete" ><i class="fa-solid fa-trash"></i></a>
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
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script language="javascript">
    function deletestudent(delid) {
        if (confirm("Bạn có muốn xóa sinh viên này")) {
            window.location.href = 'student/xuly.php?id=' + delid + '';
            return true;
        }
    }
</script>