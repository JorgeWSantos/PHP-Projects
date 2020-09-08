<!-- date -->
<?php
echo "date";
echo "<br/>";

echo date("d/m/Y");
// 20/06/2015

echo "<br/>";
echo "<br/>";
?>

<!-- date, time and strtotime -->
<?php

echo "date, time and strtotime";
echo "<br/>";
$nextWeek = time() + (7 * 24 * 60 * 60);

// Now: 04-07-2015 à Data atual
echo "Now: " . date('d-m-Y') . "<br/>";

// Next Week: 11-07-2015 à Uma semana após a data atual
echo 'Next Week: ' . date('d-m-Y', $nextWeek) . "<br/>";

// strtotime
// strtotime() recebe como parâmetro uma 
// string de formato de data em inglês e tenta analisar esse formato
// Next Week: 11-07-2015 à Uma semana após a data atual utilizando strtotime
echo 'Next Week: ' . date('d-m-Y', strtotime('+1 week')) . "<br/>";

echo "<br/>";
echo "<br/>";
?>

<!-- // mktime
//mktime() recebe como parâmetro hora, minuto, segundo, mês, dia e ano -->
<?php
echo "mktime";
echo "<br/>";

$data = mktime(02, 30, 00, 04, 30, 1995);
// Mostra 30-04-1995
echo date("d-m-Y", $data) . "<br>";

// Mostra 30-04-1995 02:30
echo date("d-m-Y H:i", $data) . "<br>";

echo "<br/>";
echo "<br/>";
?>

<!-- datetime -->
<?php
echo "datetime";
echo "<br/>";

$atual = new DateTime();
$especifica = new DateTime(' 1990-01-22');
$texto = new DateTime('+1 month');

print_r($atual);
echo "<br/>";

print_r($especifica);
echo "<br/>";

print_r($texto);
echo "<br/>";
echo "<br/>";
?>

<!-- add month -->
<?php
echo "add month";
echo "<br/>";

$date = new DateTime();
echo $date->format('d-m-Y H:i:s');
echo "<br/>";

$date = new DateTime('+1 month');
echo $date->format('d:m:Y H:i:s');
echo "<br/>";
echo "<br/>";

?>

<!-- add month with modify -->
<?php
echo "add month with modify";
echo "<br/>";

$data = new DateTime('22-01-1990');
echo $data->format('d-m-Y H:i:s');
echo "<br/>";
$data->modify('+1 month');
echo $data->format('d-m-Y H:i:s');
echo "<br/>";
echo "<br/>";

?>

<!-- set date -->
<!-- setDate() recebe três parâmetros: o ano, o mês e o dia -->
<?php
echo "set date";
echo "<br/>";

$data = new DateTime('22-01-1990');
$data->setDate(1995, 3, 9);
echo $data->format('d-m-Y H:i:s');
echo "<br/>";
echo "<br/>";
?>

<!-- set time -->
<!--  setTime() a hora, minutos e segundos, sendo que os segundos é um parâmetro opcional -->
<?php
echo "set time";
echo "<br/>";

$data = new DateTime('22-01-1990');
$data->setTime(02, 25, 10);
echo $data->format('d-m-Y H:i:s');
echo "<br/>";
echo "<br/>";
?>

<!-- createFromFormat -->
<?php
echo "createFromFormat";
echo "<br/>";

$data = '09-03-1995';
$data1 = DateTime::createFromFormat('d-m-Y', $data);
echo $data1->format('d-m-Y');
echo "<br/>";
echo "<br/>";
?>

<!-- DateTimeZone -->
<?php
echo "DateTimeZone";
echo "<br/>";

$fuso = new DateTimeZone('America/Sao_Paulo');
$data = new DateTime();
$data->setTimezone($fuso);
echo $data->format('d/m/Y H:i:s');
echo "<br/>";
echo "<br/>";

?>

<!-- DateInterval -->
<?php
echo "DateInterval";
echo "<br/>";

$intervalo = new DateInterval('P3YT8M');
print_r($intervalo);
echo "<br/>";
echo "<br/>";

?>

<!-- DateInterval format -->
<?php
echo "DateInterval format";
echo "<br/>";

$intervalo = new DateInterval('P2Y4D');
echo $intervalo->format('%y anos e %d dias');

echo "<br/>";
echo "<br/>";

?>

<!-- Diff -->
<?php
echo "Diff";
echo "<br/>";

$data1 = new DateTime('2011-09-11');
$data2 = new DateTime('2011-10-13');
$intervalo = $data1->diff($data2);
echo $intervalo->format('%R%a dias');

echo "<br/>";
echo "<br/>";

?>

<!-- Comparar Datas -->
<?php
echo "Comparar Datas";
echo "<br/>";

$data1 = new DateTime('2011-09-11');
$data2 = new DateTime('2011-10-13');

var_dump($data1 == $data2);
echo "<br/>";

var_dump($data1 > $data2);
echo "<br/>";

var_dump($data1 < $data2);

echo "<br/>";
echo "<br/>";

?>

<!-- Add Date -->
<?php
echo "Add Date";
echo "<br/>";

$data = new DateTime('2011-09-11');
print_r($data);
echo "<br/>";

$data->add(new DateInterval('P2M5D'));
print_r($data);

echo "<br/>";
echo "<br/>";

?>

<!-- Sub Date -->
<?php
echo "Add Date";
echo "<br/>";

$data = new DateTime('2011-09-11');
print_r($data);
echo "<br/>";

$data->sub(new DateInterval('P5D'));
print_r($data);

echo "<br/>";
echo "<br/>";

?>


<!-- strftime -->
<!-- 
%e: Dia em número
%a: Dia abreviado
%A: Dia por extenso
%m: Mês em número
%b: Mês abreviado
%B: Mês por extenso
%y: Ano com dois dígitos
%Y: Ano com quadro dígitos 
-->
<?php
echo "strftime";
echo "<br/>";
echo strftime("%A");
// Wednesday
echo "<br/>";
echo "<br/>";
?>

<!-- getlastmod -->
<!-- get the last modification on the page -->
<?php
echo "getlastmod";
echo "<br/>";

header('Content-type: text/html; charset=UTF-8');
echo "Última Modificação: " . date("F d Y H:i:s", getlastmod());
echo "<br/>";
echo "<br/>";
?>

<!-- checkdate -->
<!-- formato (Mês, dia e ano), verifica se a data existe -->
<?php
echo "checkdate()";
echo "<br/>";

var_dump(checkdate(12, 31, 2000));
var_dump(checkdate(2, 29, 2001));
echo "<br/>";
echo "<br/>";
?>

<!-- getdate -->
<!-- pega a data de hoje -->
<?php
echo "getdate()";
echo "<br/>";

$today = getdate();
print_r($today);
echo "<br/>";
echo "<br/>";
?>

<!-- explode -->
<?php
echo "explode()";
echo "<br/>";

$data = date("d/m/Y");

$data = explode("/", $data);

list($dia, $mes, $ano) = $data;

$data = "$ano/$mes/$dia";
 echo $data;
echo "<br/>";
echo "<br/>";
?>

<!-- idate -->
<?php
echo "idate()";
echo "<br/>";

$timestamp = strtotime('9st March 1995');
echo idate('d', $timestamp);
echo "<br/>";
echo "<br/>";
?>