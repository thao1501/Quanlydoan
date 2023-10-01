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
                <h3 class="card-title">Thêm đề tài</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm " method="post" action="dsdetai/xuly.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên đề tài</label>
                    <input type="text" name="tendt" class="form-control" id="name" placeholder="Tên đè tài" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Thời gian bắt đầu </label>
                    <input type="text" name="timebd"  class="form-control" id="time" placeholder="VD: 2022-11-21" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Thời gian kết thúc</label>
                    <input type="text" name="timekt" class="form-control" id="name" placeholder="VD: 2023-02-21" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sinh viên thực hiện</label>
                    <input type="text" name="svth" class="form-control" id="name" placeholder="Họ tên sinh viên">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Giảng viên hướng dẫn</label>
                    <input type="text" name="gvhd" class="form-control" id="name" placeholder="Họ tên giảng viên">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mô tả</label>
                    <textarea name="note" class="form-control" id="" cols="30" rows="10"></textarea>
                  </div>
                  <button type="submit" name="adddetai" class="btn btn-success">Thêm</button>
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