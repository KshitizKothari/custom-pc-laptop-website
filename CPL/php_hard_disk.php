<?php
	$con=mysqli_connect("localhost","root","","custom_pc_laptop");
	$size=$_POST["h_size"];
	$p_price=$_POST["h_price"];
	
	move_uploaded_file($_FILES["h_image"]["tmp_name"],"h_image/".$_FILES["h_image"]["name"]);
	$p_image=$_FILES["h_image"]["name"];
	
	
	$r=mysqli_query($con,"insert into hard_disk(size,price,image)
	values('$size','$p_price','$p_image')");
	if($r)
		echo "inserted";
	else
		echo mysqli_Error($con);
	

?>