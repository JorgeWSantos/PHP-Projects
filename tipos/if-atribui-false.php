<?php

// Variável não definida
if($variavel){
  echo "$variavel é FALSE nesse contexto";
}

if(0){
  echo "0 é FALSE nesse contexto";
}

if("0"){
  echo "String '0' é FALSE nesse contexto";
}

if(null){
  echo "Null é FALSE nesse contexto";
}

// Array vazio
if([]){
  echo "Array vazio é FALSE nesse contexto";
}
?>