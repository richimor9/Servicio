<?php
	include("check.php");	
?>
 
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
 
<body>
<h1 class="hello">Hola, <em><?php echo $login_user;?>!</em></h1>
<div class="container">
		<div class="newbar">
			<ul>
				<li>
					<a href="#">Inventario</a>
				</li>
				<li>
					<a href="#">Contacto</a>
				</li>

			</ul>
		</div>
	<p>Aqui puedes dar las altas</p>

<a href="logout.php" style="font-size:18px">Logout?</a>

</body>
</html>