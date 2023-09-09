<?php
session_start();
include 'coon.php';

$email = $_POST['email'];
$pass = md5($_POST['pass']) ;
$select_login = "SELECT * FROM `admin` WHERE email ='$email' and pass = '$pass'";
$result = $con->query($select_login);
$result_nun = $result->num_rows;
$result_fetch = $result->fetch_assoc();
if ($result_nun >0) {
  header('location:../../home.php');
  $_SESSION['username']=$result_fetch['name'];
}else{
  $_SESSION['error']=0;
  header('location:../../index.php');
}
?>