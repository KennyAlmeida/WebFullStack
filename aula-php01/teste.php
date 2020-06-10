<?php
	$nome = "Marcos";
	$idade = 30;
	$casado = false;


	if($casado){
		$msg= "casado";
	} else{
		$msg= "Solteiro";
	}

	if($idade < 18){
		$deMaior= "menor";
	} else{
		$deMaior= "maior";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>teste php</title>
</head>
<body>
	<h1>
		<?php echo $nome?>
	</h1>
	<p>
		Tenho <?= $idade?> anos e sou <?php echo $msg ?>
	</p>
	<p>
		Sou de <?= $deMaior?>
	</p>


</body>
</html>