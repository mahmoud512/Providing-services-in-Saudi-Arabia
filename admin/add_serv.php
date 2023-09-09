<?php
$title = "service";
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
              <li class="breadcrumb-item"><a href="#">الحجوزات</a></li>
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
            <div class="card-header">
              <h3 class="card-title">الحجوزات</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body" style="overflow: auto;">
              <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                <thead>
                <tr>
                  <th>#</th>
                  <th>اسم المستخدم</th>
                  <th>رقم الامحمول</th>
                  <th>رقم المحمول</th>
                  <th>العنوان</th>
                  <th>رقم المنزل</th>
                  <th> تاريخ الحجز </th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    include 'layout/function/coon.php';
                    $select_serv = "SELECT * FROM `add_serv`";
                    $result = $con->query($select_serv);
                    $x=0;
                    foreach($result as $value){
                      $x++;
                  ?>
                <tr>
                  <th><?=$x?></th>
                  <th><?=$value['name_user']?></th>
                  <th><?=$value['phone']?></th>
                  <th><?=$value['phone2']?></th>
                  <th><?=$value['addres']?></th>
                  <th><?=$value['num_home']?></th>
                  <th><?=$value['date']?></th>
                </tr>
                  <?php
                    }
                  ?>

                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>اسم المستخدم</th>
                  <th>رقم الامحمول</th>
                  <th>رقم المحمول</th>
                  <th>العنوان</th>
                  <th>رقم المنزل</th>
                  <th> تاريخ الحجز </th>
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
