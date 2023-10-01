<!-- Content Header (Page header) -->
<?php
include('./db/connect.php');
    $sql = "select project.*, student.name as student_name, teachers.name as teacher_name ,class.name as class_name, faculty.name as faculty_name 
    from project 
    LEFT JOIN student on student.id = project.student_id 
    LEFT JOIN teachers on teachers.id = project.teacher_id 
    LEFT JOIN class on class.id = student.class_id 
    LEFT JOIN faculty on faculty.id = class.faculty_id";
$projects = mysqli_query($mysqli, $sql);
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Quản lý đồ án</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Quản lý đồ án</li>
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
                                <div style="display: flex; justify-content: space-between;">
                                    <div>
                                        <a href="index.php?action=addproject" class="btn btn-success">Thêm</a>

                                    </div>
                                    <form action="index.php?action=search" method="post">
                                        <div style="width: 400px;" class="input-group">
                                            <input type="text" class="form-control rounded" name="key" placeholder="Search"
                                                aria-label="Search" aria-describedby="search-addon" />
                                            <button type="submit" name="search"
                                                class="btn btn-outline-primary">Tìm kiếm</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Mã đồ án</th>
                                            <th>Tên đồ án</th>
                                            <th>Người thực hiện</th>
                                            <th>Nội dung</th>
                                            <th>Thông tin khác</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 0;
                                        ?>

                                        <?php
                                        while ($project = mysqli_fetch_array($projects, MYSQLI_ASSOC)) {
                                            $i++;
                                        ?>
                                        <tr>
                                            <td>
                                                <?php echo $i ?>
                                            </td>
                                            <td>
                                                <?php echo $project['code_project'] ?>
                                            </td>
                                            <td>
                                                <?php echo $project['title'] ?> <br>
                                                <a target="_blank" href="<?php echo $project['linkdownload'] ?>">Link
                                                    online</a>

                                            </td>
                                            <td>

                                                <i class="fa-solid fa-user"></i>
                                                <?php echo $project['student_name'] ?>


                                            </td>
                                            <td>
                                                <?php echo $project['content'] ?>
                                            </td>
                                            <td>

                                                <strong>Lớp:</strong>
                                                <?php echo $project['class_name'] ?> <br>
                                                <strong>Khoa:</strong>
                                                <?php echo $project['faculty_name'] ?> <br>
                                                <strong>GV Hướng dẫn:</strong>
                                                <?php echo $project['teacher_name'] ?> <br>
                                                <strong>Điểm:</strong>
                                                <?php echo $project['point'] ?>
                                            </td>
                                            <td>
                                                <a class="btn-danger btn btn-sm"
                                                    href="index.php?action=editproject&id=<?php echo $project['id'] ?>"><i
                                                        class="fa-solid fa-pen"></i></a>
                                                <a class="btn btn-warning btn-sm"
                                                    onClick="deleteproject(<?php echo $project['id']; ?>)"
                                                    name="Delete"><i class="fa-solid fa-trash"></i></a>
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
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script language="javascript">
    function deleteproject(delid) {
        if (confirm("Bạn có muốn xóa đồ án này")) {
            window.location.href = 'project/xuly.php?id=' + delid + '';
            return true;
        }
    }
</script>