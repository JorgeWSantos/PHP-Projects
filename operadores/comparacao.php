<!-- Operadores de comparação ou condicionais, são aqueles capazes de fazer comparações entre variáveis, com eles podemos saber se uma variável é maior que a outra, diferente, etc. Veja abaixo os operadores de comparação:

(==) Igual a
(===) Idêntico, e do mesmo tipo de dados
(!=),(<>) Diferente de
(!==) Não idêntico
(<) Menor que
(>) Maior que
(<=) Menor ou igual a
(>=) Maior ou igual a
(<=>) Define um inteiro(-1,0,1) caso o resultado da comparação for menor que, igual ou maior que, respectivamente
 -->

<?php
$numero1 = 15;
$numero2 = 5;
$numero3 = 5;

//Verifica se $numero1 é igual a $numero2
if ($numero1 == $numero2) {
  echo "Sim";
} else {
  echo "Não";
}

//Verifica se $numero1 é diferente de $numero2
if ($numero1 != $numero2) {
  echo "Sim";
} else {
  echo "Não";
}

//Verifica se $numero1 é menor que $numero2
if ($numero1 < $numero2) {
  echo "Sim";
} else {
  echo "Não";
}

//Verifica se $numero3 é maior que $numero1
if ($numero3 > $numero1) {
  echo "Sim";
} else {
  echo "Não";
}

//Verifica se $numero1 é menor ou igual a $numero2
if ($numero1 <= $numero2) {
  echo "Sim";
} else {
  echo "Não";
}

//Verifica se $numero1 é maior ou igual a $numero2
if ($numero1 >= $numero2) {
  echo "Sim";
} else {
  echo "Não";
}

//Verifica se $numero1 é idêntico a $numero2
if ($numero3 === $numero2) {
  echo "Sim";
} else {
  echo "Não";
}

//Verifica se $numero1 não é idêntico a $numero2
if ($numero1 !== $numero2) {
  echo "Sim";
} else {
  echo "Não";
}

/*Define o inteiro 1 como resultado da comparação,
pois $numero é maior que $numero2*/
if ($numero1 <=> $numero2) {
  echo "Sim";
} else {
  echo "Não";
}
?>