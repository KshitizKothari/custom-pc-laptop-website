<?php
	$con=mysqli_connect("localhost","root","","custom_pc_laptop");
	$size=$_POST["g_size"];
	$p_price=$_POST["g_price"];
	
	move_uploaded_file($_FILES["g_image"]["tmp_name"],"g_image/".$_FILES["g_image"]["name"]);
	$p_image=$_FILES["g_image"]["name"];
	
	
	$r=mysqli_query($con,"insert into graphic_card(size,price,image)
	values('$size','$p_price','$p_image')");
	if($r)
		echo "inserted";
	else
		echo mysqli_Error($con);
	

?>