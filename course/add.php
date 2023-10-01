<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Quản lý niên khóa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Quản lý niên khóa</li>
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
                <h3 class="card-title">Thêm niên khóa</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm " method="post" action="course/xuly.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Tên khóa" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Niên khóa</label>
                    <input type="text" name="time"  class="form-control" id="time" placeholder="VD: 2018-2022">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mô tả</label>
                    <textarea name="note" class="form-control" id="" cols="30" rows="10"></textarea>
                  </div>
                  <button type="submit" name="addcourse" class="btn btn-success">Thêm</button>
                  <button type="submit" name="cancel" class="btn btn-success" formnovalidate>cancel</button>  
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
    