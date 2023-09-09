<?php
$title = "makala";
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
              <li class="breadcrumb-item"><a href="#">المقالات</a></li>
              <li class="breadcrumb-item active">الصفحة الرئيسية</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <hr>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      
      



      <div class="card">
            <div class="card-header" style="display: flex; justify-content: space-between; width: 100%;">
              <a href="add_makala.php" class="btn btn-primary"> اضافة مقالة  <i class="nav-icon far fa-plus-square"></i> </a>
              <h3 class="card-title">المقالات</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body" style="overflow: auto;">
              <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                <thead>
                <tr>
                  <th>#</th>
                  <th> عنوان المقالة </th>
                  <th> غلاف المقالة </th>
                  <th> Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    include 'layout/function/coon.php';
                    $select_serv = "SELECT * FROM `makala` ORDER BY id DESC ";
                    $result = $con->query($select_serv);
                    $x=0;
                    foreach($result as $value){
                      $x++;
                  ?>
                <tr>
                  <th><?=$x?></th>
                  <th><?=$value['title']?></th>
                  <th><img style="width: 80px; height: 80px;" src="assets/img/<?=$value['cover']?>" alt=""></th>
                  <th>
                    <a class="btn btn-warning btn-sm" href="edit_makala.php?id=<?=$value['id']?>"> تعديل المقالة </a>
                    <a class="btn btn-danger btn-sm" href="layout/function/delete_makala.php?id=<?=$value['id']?>"> حذف المقالة </a>
                  </th>
                </tr>
                  <?php
                    }
                  ?>

                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th> عنوان المقالة </th>
                  <th> غلاف المقالة </th>
                  <th> Action </th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->            
          </div>
          <!-- /.card -->  
  </div>
    </div>
  </div>

    
  <?php
    include 'layout/inc/footer.php';
  ?>
