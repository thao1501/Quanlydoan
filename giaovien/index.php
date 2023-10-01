<!-- Content Header (Page header) -->
<?php
include('./db/connect.php');

$sql = "select teachers.*, faculty.name as faculty_name from teachers join faculty on faculty.id = teachers.faculty_id";
$sql2 = "select * from faculty";
$teachers = mysqli_query($mysqli, $sql);
$khoas = mysqli_query($mysqli, $sql2);

?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Quản lý giảng viên</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Quản lý giảng viên</li>
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
                            <div class="card-header d-flex justify-between w-100">
                                <div style="">
                                    <div class="d-flex">
                                        <a style="margin-right:8px" href="index.php?action=themgiaovien" class="btn btn-success">Thêm</a>
                                        <a href="#" class="btn btn-primary js_xuat">Xuất file</a>
                                    </div>
                                    Lọc:
                                    <select class="js-option" style="margin-top:8px" class="form-control">
                                        <option class="mt-2 ">Tất cả</option>
                                        <?php
                                        while ($khoa = mysqli_fetch_array($khoas, MYSQLI_ASSOC)) {
                                        ?>
                                            <option value="<?php echo $khoa['name'] ?>">
                                                <?php echo $khoa['name'] ?>
                                            </option>
                                        <?php
                                        }
                                        ?>
                                        </select>
                                </div>
                                <div style="display: flex;margin-left:auto">
                                    <div>
                                        <form class="d-flex">
                                            <input type="text" class="js-input" class="form-control" placeholder="tìm kiếm">
                                        
                                            <button type="button" class="btn btn-success js-search">Tìm</button>
                                        </form>
                                     
                                    </div>
                                </div>
                            </div>
                            
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Avatar</th>
                                            <th>Tên giáo viên</th>
                                            <th>Thông tin</th>
                                            <th>Khoa</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 0;
                                        ?>

                                        <?php
                                        while ($teacher = mysqli_fetch_array($teachers, MYSQLI_ASSOC)) {
                                            $i++;
                                        ?>
                                            <tr class="js-id" data-id="<?php echo $teacher['id'] ?>">
                                                <td>
                                                    <?php echo $i ?>
                                                </td>
                                                <?php
                                                if ($teacher['avatar'] == '') {
                                                ?>
                                                    <td><i> Đang cập nhập ...</i></td>
                                                <?php

                                                } else {

                                                ?>
                                                    <td><img style="width: 100px; height: 100px;" src="./uploads/<?php echo $teacher['avatar'] ?>" alt=""></td>

                                                <?php
                                                }
                                                ?>
                                                <td class="js-name">
                                                    <?php echo $teacher['name'] ?>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li>
                                                            <i class="fa-solid fa-phone"></i>
                                                            <?php echo $teacher['phone'] ?>
                                                        </li>
                                                        <li><i class="fa-solid fa-envelope"></i>
                                                            <?php echo $teacher['email'] ?>
                                                        </li>
                                                        <li><i class="fa-solid fa-location-dot"></i>
                                                            <?php echo $teacher['address'] ?>
                                                        </li>
                                                        <li><i class="fa-solid fa-cake-candles"></i>
                                                            <?php echo $teacher['birthday'] ?>
                                                        </li>
                                                    </ul>

                                                </td>

                                                <td class="js-khoa" data-khoa=" <?php echo $teacher['faculty_name'] ?>">
                                                    <strong>Khoa:</strong>  <?php echo $teacher['faculty_name'] ?>
                                                </td>
                                                <td>
                                                    <a class="btn-danger btn btn-sm" href="index.php?action=editteacher&id=<?php echo $teacher['id'] ?>"><i class="fa-solid fa-pen"></i></a>
                                                    <a class="btn btn-warning btn-sm" onClick="deleteTeacher(<?php echo $teacher['id']; ?>)" name="Delete" ><i class="fa-solid fa-trash"></i></a>
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
    function deleteTeacher(delid) {
        if (confirm("Bạn có muốn xóa giáo viên này")) {
            window.location.href = 'giaovien/xuly.php?id=' + delid + '';
            return true;
        }
    }
    $(".js-search").click(function() {
            var keyword = $(".js-input").val().toLowerCase();
            $(".js-option").val('Tất cả')
            $(".js-name").each(function() {
                var text = $(this).text().toLowerCase();
                if (text.includes(keyword)) {
                    $(this).closest("tr").show(); 
                } else {
                    $(this).closest("tr").hide(); 
                }
            });
        });
        $(".js-option").change(function() {
            var selectedValue = $(this).val().toLowerCase();
            console.log((selectedValue) );
            $('.js-input').val('');

            $(".js-khoa").each(function() {
                var khoaValue = $(this).data("khoa").toLowerCase();
                if (selectedValue == "tất cả") {
                    $(this).closest("tr").show();
                } else if (khoaValue.includes(selectedValue)) {
                    $(this).closest("tr").show(); 
                } else {
                    $(this).closest("tr").hide(); 
                }
            });
        });
        $(".js_xuat").click(function(e){
            e.preventDefault();
            var selectedIds = [];
            $('.js-id:visible').each(function() {
                var id = $(this).data("id");
                selectedIds.push(id);
            });
            if(selectedIds.length > 0){
                var selectedIdsJSON = JSON.stringify(selectedIds);
                console.log(selectedIdsJSON);
                $.ajax({
                    url: "giaovien/xuatExcel.php",
                    data: { selectedIds: selectedIdsJSON }, 
                    method: "POST",
                    success: function(data) {
                        window.location.href = "quanlydoantn/" + data;
                    }
                });
            }else{
                alert("Danh sách rỗng");
            }
        });
</script>