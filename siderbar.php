<?php 
 if(isset($_GET['logout']) && $_GET['logout'] == 1){
  session_unset();
  setcookie("success", "Đăng xuất thành công!", time()+1, "/","", 0);
  header('Location:login.php');
 }
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
 
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist/img/avatar3.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo $_SESSION['fullname'] ?></a>
      </div>
    </div>
    <?php
    if (isset($_GET['action'])) {
      $action = $_GET['action'];
    } else {
      $action = '';
    } ?>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="index.php" class="nav-link <?php if ($action == '') :
                                                echo 'active';
                                              endif; ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Trang chủ
            </p>
          </a>

        </li>
        <li class="nav-item">
          <a href="index.php?action=faculty" class="nav-link <?php if ($action == 'faculty' || $action == 'addfaculty' || $action == 'editfaculty') :
                                                                echo 'active';
                                                              endif; ?>">
            <i class="nav-icon far fa-circle text-info"></i>
            <p>Quản lý khoa</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="index.php?action=course" class="nav-link <?php if ($action == 'course' || $action == 'addcourse' || $action == 'editcourse') :
                                                              echo 'active';
                                                            endif; ?>">
            <i class="nav-icon far fa-circle text-info"></i>
            <p>Quản lý niên khóa</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="index.php?action=class" class="nav-link <?php if ($action == 'class' || $action == 'addclass' || $action == 'editclass') :
                                                              echo 'active';
                                                            endif; ?>">
            <i class="nav-icon far fa-circle text-info"></i>
            <p>Quản lý lớp</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="index.php?action=giaovien" class="nav-link <?php if ($action == 'giaovien' || $action == 'themgiaovien' || $action == 'editteacher') :
                                                                echo 'active';
                                                              endif; ?>">
            <i class="nav-icon far fa-circle text-info"></i>
            <p>
              Quản lý giảng viên
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="index.php?action=student" class="nav-link 
          <?php if ($action == 'student' || $action == 'addstudent' || $action == 'editstudent') :
                                                                echo 'active';
                                                              endif; ?>">
            <i class="nav-icon far fa-circle text-info"></i>
            <p>Quản lý sinh viên</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="index.php?action=dsdetai" class="nav-link 
          <?php if ($action == 'dsdetai' || $action == 'adddetai' || $action == 'editdetai') :
                                                                echo 'active';
                                                              endif; ?>">
            <i class="nav-icon far fa-circle text-info"></i>
            <p>Danh sách đề tài</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="index.php?action=project" class="nav-link 
          <?php if ($action == 'project' || $action == 'addproject' || $action == 'editproject') :
                                                                echo 'active';
                                                              endif; ?>">
            <i class="nav-icon far fa-circle text-info"></i>
            <p>Quản lý điểm đồ án</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="index.php?action=council" class="nav-link <?php if ($action == 'council' || $action == 'addcouncil' || $action == 'editcouncil') :
                                                                echo 'active';
                                                              endif; ?>">
            <i class="nav-icon far fa-circle text-info"></i>
            <p>Quản lý hội đồng</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="index.php?action=user" class="nav-link 
          <?php if ($action == 'user' || $action == 'adduser' || $action == 'edituser') :
                                                                echo 'active';
                                                              endif; ?>">
            <i class="nav-icon far fa-circle text-info"></i>
            <p>Quản lý user</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="index.php?action=user" class="nav-link 
          <?php if ($action == 'train' || $action == 'addtrain' || $action == 'edittrain') :
                                                                echo 'active';
                                                              endif; ?>">
            <i class="nav-icon far fa-circle text-info"></i>
            <p>Quản lý hệ đào tạo </p>
          </a>
        </li>


        <li class="nav-item">
          <a href="index.php?logout=1" class="nav-link ">
            <p>Đăng xuất</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>