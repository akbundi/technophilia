<?php
session_start();
include 'connection.php'; //This function will append slash(/) before every single code(') so it work as single string
$username=mysqli_real_escape_string($con,$_POST['username']);
$password=mysqli_real_escape_string($con,$_POST['password']); //This function will append slash(/) before every single code(') so it work as single string
$role=$_POST['role'];

$sql="select * from users where username='$username' and password='$password'";
$res=mysqli_query($con,$sql);
$count=mysqli_num_rows($res);
$row=mysqli_fetch_assoc($res);
if($count==0){
	header("location:index.php?wrong");
}
else{
	$_SESSION['user'] = $row['username']; //This will fetch value from database & after that it give access to avoid data tampering
	$_SESSION['role'] = $row['role']; //This will fetch value from database & after that it give access to avoid data tampering
	header("location:home.php?image=image.php");
}
?>