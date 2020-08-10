<?php
	$con=mysqli_connect("localhost","root","","custom_pc_laptop");
	$size=$_POST["s_size"];
	$p_price=$_POST["s_price"];
	
	move_uploaded_file($_FILES["s_image"]["tmp_name"],"s_image/".$_FILES["s_image"]["name"]);
	$p_image=$_FILES["s_image"]["name"];
	
	
	$r=mysqli_query($con,"insert into ssd(size,price,image)
	values('$size','$p_price','$p_image')");
	if($r)
		echo "inserted";
	else
		echo mysqli_Error($con);
	

?>
