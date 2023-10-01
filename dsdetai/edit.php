<?php 
    $id =$_GET['id'];
    if($id){

        $sql = "select * from dsdetai where id = '$id'";
        $result = mysqli_query($mysqli, $sql);
        $faculty = mysqli_fetch_array($result);
    }
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

    <!-- Main content --><section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Sửa đề tài</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm " method="post" action="dsdetai/xuly.php?id=<?php echo $faculty['id'] ?>">
                <div class="card-body">
                    
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên đề tài</label>
                    <input type="text" name="tendt" value="<?php echo $faculty['tenDT'] ?>" class="form-control" id="name" placeholder="Tên đề tài">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Thời gian bắt đầu</label>
                    <input type="text" name="timebd" value="<?php echo $faculty['thoiGianDB'] ?>" class="form-control" id="name" placeholder="VD: 2022-11-21">
                  </div>
                  <!--INSERT INTO `dsdetai`(`id`, `maDT`, `tenDT`, `thoiGianDB`, `thoiGianKT`, `nguoiThuchien`, `giangVienhd`, `motaDT`) -->
                  <div class="form-group">
                    <label for="exampleInputEmail1">Thời gian kết thúc</label>
                    <input type="text" name="timekt" value="<?php echo $faculty['thoiGianKT'] ?>" class="form-control" id="name" placeholder="VD: 2023-01-21">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sinh viên thực hiện</label>
                    <input type="text" name="svth" value="<?php echo $faculty['nguoiThuchien'] ?>" class="form-control" id="name" placeholder="Họ tên sinh viên">
                  </div>
    
                  <div class="form-group">
                    <label for="exampleInputEmail1">Giảng viên hướng dẫn</label>
                    <input type="text" name="gvhd" value="<?php echo $faculty['giangVienhd'] ?>" class="form-control" id="time" placeholder="Họ tên giảng viên">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mô tả</label>
                    <textarea name="note" class="form-control"  id="" cols="30" rows="10"><?php echo $faculty['motaDT'] ?></textarea>
                  </div>
                  <button type="submit" name="editdetai" class="btn btn-success">Sửa</button>
                  <button type="submit" name="editcancel" class="btn btn-success">cancel</button>

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