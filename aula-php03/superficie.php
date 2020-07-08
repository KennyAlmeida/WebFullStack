<?php 

//2.a
function triangulo($base, $altura) {
	return $base * $altura / 2;
}


//2.b
function retangulo($base, $altura){
	return $base * $altura;
}


//2.c
function quadrado($lado){
	return $lado * $lado;
}


//2.d

function ciruclo ($raio) {
	$a = 3.14 * $raio**2;
	return $a; 

}


echo "A superfície do triângulo é dê: " . triangulo(10, 5) . "<br>";

echo "A superfície do retangulo é dê: " . retangulo(10, 5) . "<br>";

echo "A superfície do quadrado é dê: " . quadrado(10)  . "<br>";

echo "A superfície do circulo é dê: " . ciruclo(10)  . "<br>";

 ?>