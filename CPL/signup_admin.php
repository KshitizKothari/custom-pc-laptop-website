<?php
	$con=mysqli_connect("localhost","root","","custom_pc_laptop");
	$name=mysqli_real_escape_string($con,$_POST["name"]);
	$pass=$_POST["pass"];
	$gender=$_POST["gen"];
	$num=$_POST["num"];
	move_uploaded_file($_FILES["photo"]["tmp_name"],"upload/".$_FILES["photo"]["name"]);
	$pname=$_FILES["photo"]["name"];
	$email=$_POST["email"];
	
	
	$r=mysqli_query($con,"insert into admin(names,email,password,gender,image,mobile_number)
	values('$name','$email','$pass','$gender','$pname','$num')");
	if($r)
		echo "inserted";
	else
		echo mysqli_Error($con);
	

?>
