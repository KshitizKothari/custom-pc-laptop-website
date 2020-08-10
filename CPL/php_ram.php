<?php
	$con=mysqli_connect("localhost","root","","custom_pc_laptop");
	$size=$_POST["r_size"];
	$p_price=$_POST["r_price"];
	
	move_uploaded_file($_FILES["r_image"]["tmp_name"],"r_image/".$_FILES["r_image"]["name"]);
	$p_image=$_FILES["r_image"]["name"];
	
	
	$r=mysqli_query($con,"insert into ram(size,price,image)
	values('$size','$p_price','$p_image')");
	if($r)
		echo "inserted";
	else
		echo mysqli_Error($con);
	

?>
