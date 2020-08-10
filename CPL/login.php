	<?php
	session_start();
?>
<html>
	<head>
		<title>login form</title>
	</head>
	<body>
		<form action="loginbackend.php"  method='post'>
			
		<table align='center' border='5' cellspacing=0 cellpadding=10 >
		<tr>
			<td colspan=2 align="center" style="color:red;"> 
				<?php
					if(isset($_SESSION["err"]))
					echo $_SESSION["err"];
				?>
			</td>
		</tr>
		<tr>
			<td>name:</td>
			<td><input type='text' name='nm' value=''></td>
			<td>	
				<?php
					if(isset($_SESSION["user"]))
					echo $_SESSION["user"];
				?>
			</td>
				 
		</tr>
			<tr>
				<td>password:</td>
				<td><input type='password' name='pass'
				value=''></td>
				<td>	
				<?php
					if(isset($_SESSION["pass"]))
					echo $_SESSION["pass"];
				?>
			    </td>
			</tr>
				<tr>
					<td colspan='2' align='center'>
						<input type='submit' value='Login'>
					</td>
				</tr>
		</table>
	</form>
	</body>
</html>
<?php
	$_SESSION["err"]="";
	$_SESSION["user"]="";
	$_SESSION["pass"]="";
?>
		