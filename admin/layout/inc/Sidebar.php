  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?=$_SESSION['username']?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="home.php" class="nav-link <?php echo ($title == 'Home') ?'active':''?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                الصفحة الرئيسية
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="add_serv.php" class="nav-link <?php echo ($title == 'service') ?'active':''?>">
              <i class="nav-icon fas fa-th-large"></i>
              <p>
                الحجوزات
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="masseges.php" class="nav-link <?php echo ($title == 'massege') ?'active':''?>">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                الرسائل
                <span class="right badge badge-danger">  </span>
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="allmakala.php" class="nav-link <?php echo ($title == 'makala') ?'active':''?>">
              <i class="nav-icon fas fa-edit"
              ></i>
              <p>
                المقالات
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="layout/function/logout.php" class="nav-link">
              <i class="nav-icon fas fa-edit"
              ></i>
              <p>
                تسجيل الخروج
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>