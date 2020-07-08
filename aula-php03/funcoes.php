<?php 

/*//1.a
function maior($num1, $num2, $num3){
	if($num1 > $num2 && $num1 > $num3){
		return $num1;
	} else if ($num2 > $num1 && $num2 > $num3){
		return $num2;
	}else{
		return $num3;
	}
}

echo maior(1, 8, 5)."<br>";*/


//1.b
function tabela($base, $limite){
	for ($base=$base; $base <= $limite ; $base++) { 
		$array[] = $base;

	}
	foreach ($array as $arrays) {
		echo "$arrays <br>";
	}
	return $arrays;
}

	echo tabela (2,8);

//1.c
function numeroMagico($num) {
return $num;



//1.d
function maior($x,$y){
	if($x == numeroMagico()){
		echo "$x é igual ao numeroMagico";
	}else if($y == numeroMagico()){
		echo "$y é igual ao numeroMagico";
	} else{
		echo "Não é igual";
	}
}
}
numeroMagico(5 maior(5,6));



?>
