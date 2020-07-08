<form method="post">
	<label>Nome:</label>
	<input type="text" name="nome" value="">
	<label>Sobrenome:</label>
	<input type="text" name="sobrenome" value="">
	<label>Idade:</label>
	<input type="number" name="idade" value="">
	<button type="submit" >Enviar</button><br><br>
	<label>Como você ficou sabendo deste site?”</label>
	<input type="checkbox" id="comoFicouSabendo" name="comoFicouSabendo" value="google">
	<label for="comoFicouSabendo">Google</label>
	<input type="checkbox" id="comoFicouSabendo" name="comoFicouSabendo" value="facebook">
	<label for="comoFicouSabendo">Facebook</label>
	<input type="checkbox" id="comoFicouSabendo" name="comoFicouSabendo" value="instagran">
	<label for="comoFicouSabendo">Instagran</label>
	<input type="checkbox" id="comoFicouSabendo" name="comoFicouSabendo" value="outros">
	<label for="Outros">Outros</label><br><br>
	<label>Informe seu sexo:</label>
	<input type="radio" name="sexo" value="masculino"> Masculino
	<input type="radio" name="sexo" value="feminino"> Feminino
	<br><br>
	<label>Dormiu bem ontem?</label>
	<select name="dormiuBem">
  		<option name="dormiuBem" value="1"> 1</option> 
  		<option name="dormiuBem" value="2"> 2</option>
  		<option name="dormiuBem" value="3"> 3</option> 
  		<option name="dormiuBem" value="4"> 4</option>
  		<option name="dormiuBem" value="5"> 5</option> 
  		<option name="dormiuBem" value="6"> 6</option>
  		<option name="dormiuBem" value="7"> 7</option> 
  		<option name="dormiuBem" value="8"> 8</option>
  		<option name="dormiuBem" value="9"> 9</option> 
  		<option name="dormiuBem" value="10"> 10</option>
	</select><br><br>
	<input type="checkbox" id="termos" name="termos" value="aceito">
	<label for="comoFicouSabendo">Aceitar termos de condições</label>

</form>

<?php 
echo "<hr>";
echo var_dump($_POST) . "<br>";
echo "<hr>";

if ($_POST != null) {
	echo $_POST["nome"] . "<br>";
} else{
	echo "não tem nada";
}

echo "<hr>";


foreach ($_POST as $key => $value) {
	echo $key .': '. $value . "<br>";

}
echo "<hr>";

?>

