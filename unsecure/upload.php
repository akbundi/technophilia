<?php
session_start();
$uname = $_SESSION['user'];
$file_name = $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];
move_uploaded_file($file_tmp, "profile/".$file_name);
include 'connection.php';
$sql = "update users set dp='$file_name' where username='$uname'";
$res = mysqli_query($con,$sql);
$_SESSION['user']=$uname;
$_SESSION['role']=$role;
header("location:home.php?image=image.php");
?>
