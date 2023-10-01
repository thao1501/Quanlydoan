<?php
$sql = "select * from student";
$students = mysqli_query($mysqli, $sql);

$sql = "select * from teachers";
$teachers = mysqli_query($mysqli, $sql);

?>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Quản lý đồ án</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
              <li class="breadcrumb-item active">Quản lý đồ án</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content --><section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Thêm đồ án</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm " method="post" action="project/xuly.php" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Tên đồ án</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Tên đồ án" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mã đồ án</label>
                    <input type="text" name="code_project" class="form-control" id="code_project" placeholder="Mã đồ án" required>
                  </div>
                  <div class="form-group">
                                <label for="exampleInputPassword1">Người hướng dẫn</label>
                                <select class="form-control" name="teacher_id" required>
                                    <option value="" selected>---Chọn giáo viên---</option>
                                    <?php  while ($teacher = mysqli_fetch_array($teachers, MYSQLI_ASSOC)) { 
                                        ?>
                                    <option value="<?php echo $teacher['id'] ?>"><?php echo $teacher['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                  <div class="form-group">
                                <label for="exampleInputPassword1">Tên sinh viên</label>
                                <select class="form-control" name="student_id" required>
                                    <option value="" selected>---Chọn sinh viên---</option>
                                    <?php  while ($student = mysqli_fetch_array($students, MYSQLI_ASSOC)) { 
                                        ?>
                                    <option value="<?php echo $student['id'] ?>"><?php echo $student['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                  <div class="form-group">
                    <label for="">Điểm số</label>
                    <input type="number" name="point" class="form-control" id="point" placeholder="Số điểm" required>
                  </div>
                  <div class="form-group">
                    <label for="">Link online tham khảo</label>
                    <input type="text" name="linkdownload" class="form-control" id="linkdownload"  required>
                  </div>
                  <div class="form-group">
                    <label for="">File đồ án</label>
                    <input type="file" name="file" class="form-control" id="file" placeholder="Địa chỉ" >
                  </div>
                  <div class="form-group">
                    <label for="">Nội dung</label>
                    <textarea id="content" name="content">
              </textarea></div>
                  <button type="submit" name="addproject" class="btn btn-success">Thêm</button>
                  <button type="submit" name="cancel" class="btn btn-success" formnovalidate>cancel</button>  
                <!-- /.card-body -->                     
                <!-- /.card-body -->
                <div class="card-footer">
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <script type="text/javascript">

CKEDITOR.replace('content',{

width: "940px",
height: "200px"

}); 
</script>


    