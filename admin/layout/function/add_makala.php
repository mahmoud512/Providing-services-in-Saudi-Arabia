<?php
include 'coon.php';
session_start();
$title = $_POST['title'];
$desc = $_POST['desc'];
$error = [];
function handel_error($key ,$index, $value ){
  if (empty($key)) {
    $GLOBALS['error']["$index"]="$value مطلوب";
  }
}
handel_error($title ,'title', 'عنوان المقالة');
handel_error($desc ,'desc', ' محتوي المقالة مطلوب ');
// --------files----------
$img_name = $_FILES['cover']['name'];
$img_size = $_FILES['cover']['size'];
$img_tmp = $_FILES['cover']['tmp_name'];
// -----------------------
$type_img = ["png" , "jpg" , "gif" , "jpeg"];
  $explode_name_img = explode(".", $img_name);
  $explode_name_img_end = end($explode_name_img);
  if (!in_array($explode_name_img_end , $type_img)) {
    $error['type'] = ' يرجي اختيار صورة اخري من الانواع "png" , "jpg" , "gif" , "jpeg"  ';
  }
  if ($img_size > 5000000) {
    $error['size'] = 'حجم الصورة كبير';
  }
  if (empty($error)) {
    $new_img_name = time() .rand(1 , 10009000) . $img_name ; 
    move_uploaded_file($img_tmp , "../../assets/img/$new_img_name");
    $sql ="INSERT INTO `makala`(title, `desc`, cover) VALUES ('$title','$desc','$new_img_name')";
    $con->query($sql);
    header('location:../../allmakala.php');
  }else{
    $_SESSION['error']=$error;
    header('location:../../add_makala.php');
  }