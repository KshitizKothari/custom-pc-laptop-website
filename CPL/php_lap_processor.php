<?php
	$con=mysqli_connect("localhost","root","","custom_pc_laptop");
	$name=$_POST["p_name"];
	$p_price=$_POST["p_price"];
	
	move_uploaded_file($_FILES["p_image"]["tmp_name"],"lap_p_image/".$_FILES["p_image"]["name"]);
	$p_image=$_FILES["p_image"]["name"];
	
	
	$r=mysqli_query($con,"insert into lap_processor(name,price,image)
	values('$name','$p_price','$p_image')");
	if($r)
		echo "inserted";
	else
		echo mysqli_Error($con);
	

?>
