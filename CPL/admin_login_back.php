<?php
	session_start();
	$name=$_POST['nm'];
	$pass=$_POST['pass'];
	$con=mysqli_connect("localhost","root","","custom_pc_laptop");
	if(empty($name) || empty($pass))
	{
		if(empty($name))
		{
			$_SESSION["user"]="enter user name";
		}
		if(empty($pass))
		{
			$_SESSION["pass"]="enter password";
		}
		header("location:login.php");
	}
	else
	{
		$r=mysqli_query($con,"select * from admin where names='$name' 
		and password='$pass'");
		if($row=mysqli_fetch_array($r))
		{
			$_SESSION["idd"]=$row[0];
			header("location:Admin Page.html");
		}
		else
		{
				$_SESSION["err"]="Invalid Username and Password";
				header("location:index.php");
			
		}
	}
?>