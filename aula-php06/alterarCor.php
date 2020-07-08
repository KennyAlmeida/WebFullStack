<?php 
session_start();


if($_POST) {
	$_SESSION['cor'] = $_POST['cor'];
}

 ?>





<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.php">
	<title></title>
</head>
<body style="background: <?php echo $_SESSION['cor'] ?>">
	<h1>Escolha a cor do fundo!</h1>
	<form method="POST">
		<input type="color" name="cor"/>

		<button type="submit">enviar</button>

	</form>

</body>
</html>