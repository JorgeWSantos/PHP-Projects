
<!-- short form -->

<!-- 
caso a condição seja atendida, 
a própria será o código a ser executado, 
caso contrário, será executado o "codigoDois".  
-->

<?php
$nome = "Fulano de tal";
$nome = ($nome) ?: "Sem nome";
echo $nome;
?>

<!-- ternario -->
<?php
$nome = "Fulano de tal";
$nome = ($nome) ? "tem nome" : "Sem nome";
echo '<br/>';
echo $nome;
?>