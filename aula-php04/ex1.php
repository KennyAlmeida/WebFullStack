<form method="get">
	<label>Nome:</label>
	<input type="text" name="nome" value="">
	<label>Sobrenome:</label>
	<input type="text" name="sobrenome" value="">
	<label>Idade:</label>
	<input type="number" name="idade" value="">
	
	<button type="submit" name="envair">Enviar</button>
</form>

<?php 
echo "<hr>";
echo var_dump($_GET) . "<br>";
echo "<hr>";

if ($_GET != null) {
	echo $_GET["nome"] . "<br>";
} else{
	echo "não tem nada";
}

echo "<hr>";


foreach ($_GET as $key => $value) {
	echo $key .': '. $value . "<br>";

}
echo "<hr>";

?>

