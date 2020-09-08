<?php

function definir_max(){
    define("MAX", 10); //Criar constante dentro de uma função
}

definir_max();

const NOME = 'Alex';  //Fora do escopo de classe

class Empresa {
      const NOME_EMPRESA = 'DevMedia'; //Dentro do escopo de classe
}

//Acessa constante definida em escopo global
echo NOME;

//Acessa constante definida em escopo de classe
echo Empresa::NOME_EMPRESA;
?>