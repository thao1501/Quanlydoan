<?php
include('./db/connect.php');

$sql = "SELECT class.id,class.name,faculty.name as faculty_name, 
course.name as course_name, course.time as time 
FROM class LEFT JOIN faculty on faculty.id=class.faculty_id 
LEFT JOIN course on course.id=class.course_id GROUP BY class.id";
$sql2 = "SELECT * FROM course";
$classs = mysqli_query($mysqli, $sql);
$course = mysqli_query($mysqli, $sql2);
$time = mysqli_query($mysqli, $sql2);
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
                            <div class="card-header d-flex justify-between align-center">
                                <div>
                                    <a href="index.php?action=addclass" class="btn btn-success">Thêm</a>
                                    <h3 class="card-title"></h3>
                                </div>
                                <div style="margin-left:auto;display:flex">
                                <div style="width:200px;margin-right:40px"  class="d-flex;align-center">
                                       <p>Lọc Mã Khoá<p>
                                                <select style="margin-top:8px" class="form-control w-30 js-ma">
                                                    <option class="mt-2 ">Tất cả</option>
                                                    <?php
                                                    while ($khoa = mysqli_fetch_array($course, MYSQLI_ASSOC)) {
                                                    ?>
                                                        <option value="<?php echo $khoa['name'] ?>">
                                                            <?php echo $khoa['name'] ?>
                                                        </option>
                                                    <?php
                                                    }
                                                    ?>
                                                    </select>
                                             
                                </div>
                                <div style="width:200px" class="d-flex;align-center">
                                <p>Lọc thời gian<p>
                                       <select style="margin-top:8px" class="form-control w-30 js-time">
                                           <option  class="mt-2 ">Tất cả</option>
                                           <?php
                                           while ($khoa = mysqli_fetch_array($time, MYSQLI_ASSOC)) {
                                           ?>
                                               <option value="<?php echo $khoa['time'] ?>">
                                                   <?php echo $khoa['time'] ?>
                                               </option>
                                           <?php
                                           }
                                           ?>
                                           </select>
                                    
                       </div>
                                </div>  
                               
                               
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
                                                <td class="js-course" data-time=" <?php echo $class['time'] ?>" data-ma=" <?php echo $class['course_name'] ?>">
                                                   <strong>Khóa:</strong>  <?php echo $class['course_name'] ?>
                                                    <br>
                                                   <strong>Niên khóa:</strong>  <?php echo $class['time'] ?>

                                                </td>
                                    
                                            
                                                <td>
                                                    <a class="btn btn-success" href="index.php?action=editclass&id=<?php echo $class['id'] ?>">Sửa</a>
                                                    <a class="btn btn-warning" href="class/xuly.php?id=<?php echo $class['id'] ?>">Xóa</a>
                                                    <a class="btn btn-warning" href="index.php?action=detailclass&id=<?php echo $class['id'] ?>">Chi tiết</a>
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
<script>
     $(".js-ma").change(function() {
            var selectedValue = $(this).val().toLowerCase();
            console.log((selectedValue) );
            $(".js-time").val('Tất cả')
            $(".js-course").each(function() {
                var khoaValue = $(this).data("ma").toLowerCase();
                if (selectedValue == "tất cả") {
                    $(this).closest("tr").show();
                } else if (khoaValue.includes(selectedValue)) {
                    $(this).closest("tr").show(); 
                } else {
                    $(this).closest("tr").hide(); 
                }
            });
        });

        $(".js-time").change(function() {
            var selectedValue = $(this).val().toLowerCase();
            console.log((selectedValue) );
            $(".js-ma").val('Tất cả')
            $(".js-course").each(function() {
                var khoaValue = $(this).data("time").toLowerCase();
                if (selectedValue == "tất cả") {
                    $(this).closest("tr").show();
                } else if (khoaValue.includes(selectedValue)) {
                    $(this).closest("tr").show(); 
                } else {
                    $(this).closest("tr").hide(); 
                }
            });
        });
    </script>