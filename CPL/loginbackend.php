<?php
session_start();
	$name=$_POST["nm"];
	$pass=$_POST["pass"];
	$con=mysqli_connect("localhost","root","","cpl_login");
	if(empty($name)||empty($pass))
	{
		if(empty($name))
			$_SESSION["user"]="enter username";
		if(empty($pass))
			$_SESSION["pass"]="enter password";
		header("location:login.php");
	}
	else
	{
	$r=mysqli_query($con,"select *from user where name='$name' and password='$pass'");
	if($row=mysqli_fetch_array($r))
	{
		$_SESSION["idd"]=$row[0];
		header("location: .php");
	}
	else
	{
		$_SESSION["err"]="Invalid Username and Password";
		header("location:login.php");
	}
	}
?>