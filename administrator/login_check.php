<?php 
session_start();
	error_reporting(0);
	include("db.php");
	$email = $_POST["username"];
	$password = md5($_POST["password"]);
	if(mysql_num_rows(mysql_query("SELECT * FROM users_tbl WHERE email='".$email."' AND password='".$password."' AND userType=0")) == 1){
		$_SESSION["adminEmail"]=$_POST["username"];
		echo '<span style="color:green;"><b>Login Success..</b></span>';
		echo "<script>window.location.href='profile.php';</script>";
	}else{
		echo '<span style="color:Red;"><b>Invalid Credentials.</b></span>';
	}
?>