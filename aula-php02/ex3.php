<!-- 3. utilizando o foreach e o array abaixo, faça exibir a frase para cada uma das interações: "o número da posição x é y" onde x é o índice do array e y é o valor;
array(100, 404, 500, 200);
 -->


<?php 

$listas= [100, 404, 500, 200];

foreach($listas as $indice => $lista) {
    echo "o número da posição $indice é $lista". "<br>";
}



?>