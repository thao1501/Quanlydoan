<?php 
    $id =$_GET['id'];
    if($id){

        $sql = "select * from course where id = '$id'";
        $result = mysqli_query($mysqli, $sql);
        $faculty = mysqli_fetch_array($result);
    }
?>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Quản lý khóa học</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Quản lý khóa học</li>
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
                <h3 class="card-title">Sửa khóa học</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm " method="post" action="course/xuly.php?id=<?php echo $faculty['id'] ?>">
                <div class="card-body">
                    
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên khóa</label>
                    <input type="text" name="name" value="<?php echo $faculty['name'] ?>" class="form-control" id="name" placeholder="Tên khoa">
                  </div>
    
                  <div class="form-group">
                    <label for="exampleInputEmail1">Niên khóa</label>
                    <input type="text" name="time" value="<?php echo $faculty['time'] ?>" class="form-control" id="time" placeholder="VD: 2018-2022">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mô tả</label>
                    <textarea name="note" class="form-control"  id="" cols="30" rows="10"><?php echo $faculty['note'] ?></textarea>
                  </div>
                  <button type="submit" name="editcourse" class="btn btn-success">Sửa</button>
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
    