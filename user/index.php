<!-- Content Header (Page header) -->
<?php
include('./db/connect.php');
$sql = "select * from login";
$logins = mysqli_query($mysqli, $sql);
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
                                <a href="index.php?action=adduser" class="btn btn-success">Thêm</a>
                                <h3 class="card-title"></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Avatar</th>
                                            <th>Tài khoản</th>
                                            <th>Họ tên</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 0;
                                        ?>

                                        <?php
                                        while ($user = mysqli_fetch_array($logins, MYSQLI_ASSOC)) {
                                            $i++;
                                        ?>
                                        <tr>
                                            <td>
                                                <?php echo $i ?>
                                            </td>
                                            <?php
                                            if ($user['avatar'] == '') {
                                                ?>
                                            <td><i> Đang cập nhập ...</i></td>
                                            <?php

                                            } else {

                                                ?>
                                            <td><img style="width: 100px; height: 100px;"
                                                    src="./uploads/<?php echo $user['avatar'] ?>" alt=""></td>

                                            <?php
                                            }
                                                ?>
                                            <td>
                                                <?php echo $user['username'] ?>
                                            </td>
                                            <td>
                                                <?php echo $user['fullname'] ?>


                                            </td>
                                            <td>
                                                <a class="btn-danger btn btn-sm"
                                                    href="index.php?action=edituser&id=<?php echo $user['id'] ?>"><i
                                                        class="fa-solid fa-pen"></i></a>
                                                <a class="btn btn-warning btn-sm"
                                                    onClick="deleteuser(<?php echo $user['id']; ?>)" name="Delete"><i
                                                        class="fa-solid fa-trash"></i></a>
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
    function deleteuser(delid) {
        if (confirm("Bạn có muốn xóa user này")) {
            window.location.href = 'user/xuly.php?id=' + delid + '';
            return true;
        }
    }
</script>