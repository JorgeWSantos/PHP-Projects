<?php

//------------------------------------
// <!-- função por valor -->
function soma($num_1,$num_2){

$total = $num_1 + $num_2;

return $total;

}

//definido os valores para as variáveis
echo soma(5,3);

//------------------------------------
// <!-- função por referência -->
// A passagem de argumentos por referência é quando um parâmetro da 
// função recebe uma referência para uma variável externa a função

//Criada a referência em $num_1
function referencia(&$num_1){

    $num_1 *= 5;
  
    //retorno o valor de $num_1 * 5
    return $num_1;
  
  }
  
$num_2 = 3;

//Execução da função
referencia($num_2);
echo $num_2;

//------------------------------------
// <!-- função por valor padrão -->

/*Declaração da função passagem_padrao
e do parâmetro $num_1 já com seu valor definido*/
function passagem_padrao($num_1 = 15){

    return $num_1;
  
  }
  
  //Será impresso o retorno da função - 15
  echo passagem_padrao();