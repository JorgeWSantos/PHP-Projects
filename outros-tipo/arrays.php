<!-- Arrays -->
<?php
echo "Arrays()";
echo "<br/>";

$funcionarios = Array(
    Array('Jorge', '22'),
    Array('Alexia', '23')
);

foreach($funcionarios as $funcionario){
    echo $funcionario[0]." - ".$funcionario[1];
    echo "<br/>";
}

echo "<br/>";
?>