<?php
session_start();
include('conexiones.php');
if(isset($_SESSION['username'])!="")
{
	header("Location: home.php");
}


if(isset($_POST['btn-signup']))
{
	$uname = mysqli_real_escape_string($db,$_POST['username']);
	$upass = md5(mysqli_real_escape_string($db,$_POST['password']));
	
	if(mysqli_query($db,"INSERT INTO users(username,password) VALUES ('$uname','$upass')"))
	{
		?>
        <script>alert('successfully registered ');</script>

        <?php
	}
	else
	{
		?>
        <script>alert('error while registering you...');</script>
        <?php echo "" . mysqli_error($db);
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro</title>
<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>
<center>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="username" placeholder="Nombre de Usuario" required /></td>
</tr>
<tr>
<td><input type="password" name="password" placeholder="Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-signup">Registrarse</button></td>
</tr>
<tr>
<td><a href="index.php">Ingresa al sitio</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>