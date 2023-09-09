<?php
session_start();
include 'coon.php';
$name = $_POST['name'];
$phone = $_POST['phone'];
$maseg = $_POST['maseg'];
$email = $_POST['email'];

$error = [];
function handel_error($key ,$index, $value ){
  if (empty($key)) {
    $GLOBALS['error']["$index"]="$value مطلوب";
  }
}
handel_error($name ,'name', 'الاسم');
handel_error($phone ,'phone', 'رقم المحمول ');
handel_error($email ,'email', 'الاميل ');
handel_error($maseg ,'maseg', 'الرسالة ');
if (empty($error)) {
  $query_insert_maseg = "INSERT INTO `massage`(name, phone,massage, email ) VALUES ('$name','$phone','$maseg','$email')";
  $con->query($query_insert_maseg);
  $_SESSION['scses_cfoul'] = "تم الارسال بنجاح";
  header('location:../index.php');
}else{
  $_SESSION['error'] = $error;
  header('location:../index.php');
}
?>