<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Quản lý hệ đào tạo</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Quản lý khoa</li>
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
                <h3 class="card-title">Thêm </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm " method="post" action="train/xuly.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mã hệ đào tạo </label>
                    <input type="text" name="mahedt" class="form-control" id="mahedt" placeholder="Mã hệ đào tạo">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tên hệ đào tạo</label>
                    <input type="text" name="tenhedt" class="form-control" id="tenhedt" placeholder="Tên hệ đào tạo">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Hệ số</label>
                    <input type="text" name="heso" class="form-control" id="heso" placeholder="Hệ số">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Thời gian bắt đầu</label>
                    <input type="date" name="tgbatdau" class="form-control" id="tgbatdau" placeholder="Thời gian bắt đầu">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Thời gian kết thúc</label>
                    <input type="date" name="tgketthuc" class="form-control" id="tgketthuc" placeholder="Thời gian kết thúc">
                  </div>
                  <button type="submit" name="addtrains" class="btn btn-success">Thêm</button>

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