<?php
session_start();
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$uname=$_POST['username'];
$email=$_POST['email'];
$profile=$_POST['profile'];
$password=$_POST['password'];
$confpass=$_POST['confpass'];
$role=$_POST['role'];
$image=$_POST['dp'];
include 'connection.php';
if($password==$confpass){
	$sql="select * from users where username='$uname'";
	$res=mysqli_query($con,$sql);
	$count=mysqli_num_rows($res); 
	if($count==0){
		$sql="insert into users(firstname,lastname,username,email,profile,password,role) values ('$fname','$lname','$uname','$email','$profile','$password','$role')";
		$res=mysqli_query($con,$sql);
		if($res){
			$_SESSION['user'] = $uname;
			$_SESSION['role'] = $role;
			header("location:welcome.php");
		}
		else{
			header("location:error.php");
		}
	}
	else{
		header("location:index.php?exist");
	}
}
else{
	header("location:index.php?error");
}
?>