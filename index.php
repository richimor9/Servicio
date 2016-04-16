<?php
session_start();
include('conexiones.php'); // Include Login Script
if ((isset($_SESSION['username']) != '')) 
{
	header("Location: home.php");
}
if(isset($_POST['btn-login']))
{
 $username = mysqli_real_escape_string($db,$_POST['username']);
 $password = mysqli_real_escape_string($db,$_POST['password']);
 $res=mysqli_query($db,"SELECT * FROM users WHERE username='$username'");
 $row=mysqli_fetch_array($res);


 if($row['password']==md5($password))
 {
  $_SESSION['username'] = $row['username'];
  header("Location: home.php");
 }
 else
 {
  ?>
        <script>alert('wrong details');</script>
        <?php
 }
 
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Soporte</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>
	<div class="container">
		<div class="newbar">
			<ul>
				<li>
					<a href="inventario.php">Inventario</a>
				</li>
				<li>
					<a href="contacto.php">Contacto</a>
				</li>

			</ul>
		</div>
<div id="login-form">
<form method="post">
	<p>Para dar de alta a un equipo, Ingresa tus credenciales</p>

<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="username" placeholder="Nombre de usuario" required /></td>
</tr>
<tr>
<td><input type="password" name="password" placeholder="Contraseña" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-login">Log in</button></td>
</tr>
<tr>
<td><a href="register.php">Registrate</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>