<?php
$title = 'makala';
include 'layout/inc/Navbar.php';
include 'layout/inc/Sidebar.php';
?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">اضافة مقالة</a></li>
            <li class="breadcrumb-item active">الصفحة الرئيسية</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
      <hr>
    </div><!-- /.container-fluid -->
  </div>
  <?php
        function e($value)
        {
          echo (isset($_SESSION['error'][$value])) ? $_SESSION['error'][$value] : '';
          unset($_SESSION['error'][$value]);
        }
        ?>
  <div class="container-fluid">
    <div class="content" style="padding: 20px 20px; background-color: #f3f3f3; border-radius: 20px;">
      <form action="layout/function/add_makala.php" method="post" enctype="multipart/form-data">
        <label for="nametitle">عنوان المقالة : </label>
        <input type="text" name="title" id="nametitle" class="form-control">
        <span class="text-danger"><?php e('title') ?></span>
        <br>
        <label for="dec"> محتوي المقالة : </label>
        <div class="mb-3">
          <textarea class="textarea" name="desc" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
          <span class="text-danger"><?php e('desc') ?></span>
        </div>
        <br>
        <label for="c">غلاف المقالة : </label>
        <input type="file" name="cover" class="form-control" id="c">
        <span class="text-danger"><?php e('type') ?></span>
        <span class="text-danger"><?php e('size') ?></span>
        <br>
        <br>
        <input type="submit" class="btn btn-primary" style="width: 100%;" value="حفظ">
      </form>
    </div>
  </div>
</div>

<!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="float-right d-none d-sm-block">
    <b>Version</b> 3.0.0-rc.1
  </div>
  <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
  reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
<!-- Summernote -->
<script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function() {
    // Summernote
    $('.textarea').summernote()
  })
</script>
</body>

</html>