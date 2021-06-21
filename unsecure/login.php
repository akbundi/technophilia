<?php
session_start();
include 'connection.php';
$username=$_POST['username'];
$password=$_POST['password'];
$role=$_POST['role'];

$sql="select * from users where username='$username' and password='$password'";
$res=mysqli_query($con,$sql);
$count=mysqli_num_rows($res);
if($count==0){
	header("location:index.php?wrong");
}
else{
	$_SESSION['user'] = $username;
	$_SESSION['role'] = $role;
	header("location:home.php?image=image.php");
}
?>