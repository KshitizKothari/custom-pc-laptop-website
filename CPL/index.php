<?php
session_start();
?>
<html>
	<head>
		<title>Login Form</title>
	</head>
	<body>
		<form action='admin_login_back.php' method='post' >
			<table border=1 cellspacing=0 align=center cellpadding=10px>
			<tr>
				<td colspan='2' align='center' style='color:red'>
					
					<?php
						if(isset($_SESSION["err"]))
							echo $_SESSION["err"];
					?>
					
				</td>
			</tr>
			<tr>
				<td>Name:</td>
				<td><input type='text' name='nm' value=''>
				
					<?php
						if(isset($_SESSION["user"]))
							echo $_SESSION["user"];
					
					?>
				</td>
			
			<tr>
				<td>Password:</td>
				<td><input type='password' name='pass' value=''>
				
					<?php
						if(isset($_SESSION["pass"]))
							echo $_SESSION["pass"];
					
					?>
				</td>
			</tr>
			<tr>
				<td colspan=2 align=center> <input type='submit' value='Send'></input></td>
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