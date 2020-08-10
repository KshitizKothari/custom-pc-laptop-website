<?php
	$con=mysqli_connect("localhost","root","","cpl_login");
	$name=mysqli_real_escape_string($con,$_POST["name"]);
	$pass=$_POST["pass"];
	$gender=$_POST["gen"];
	$number=$_POST["numb"];
	$email=$_POST["email"];
	
	
	$r=mysqli_query($con,"insert into user(names,email,password,gender,mobile_number)
	values('$name','$email','$pass','$gender','$number')");
	if($r)
		echo "inserted";
	else
		echo mysqli_Error($con);
	

?>