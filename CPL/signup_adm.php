<?php
	$con=mysqli_connect("localhost","root","","cpl_login");
	$name=mysqli_real_escape_string($con,$_POST["name"]);
	$pass=$_POST["pass"];
	$gender=$_POST["gen"];
	move_uploaded_file($_FILES["photo"]["tmp_name"],"upload/".$_FILES["photo"]["name"]);
	$pname=$_FILES["photo"]["name"];
	$email=$_POST["email"];
	
	
	$r=mysqli_query($con,"insert into admin(name,email,password,gender,image)
	values('$name','$email','$pass','$gender','$pname')");
	if($r)
		echo "inserted";
	else
		echo mysqli_Error($con);
	

?>
