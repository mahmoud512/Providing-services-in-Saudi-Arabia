<?php
include 'coon.php';
$id = $_GET['id'];
$query = "DELETE FROM `makala` WHERE id = $id";
$con->query($query);
header('location:../../allmakala.php');