<?php

use ItemVenda\ItemVenda;
use Venda\Venda;
use VendaException\VendaException;

require_once "ItemVenda.php";
require_once "Venda.php";

try{
    $camisa = new ItemVenda();
    $camisa->setPreco(20);
    $camisa->setDescricao("algodão egipicío ck");

    $venda = new Venda();
    // $venda->adicionar($camisa);
    $venda->adicionar(null);
    print "Total da venda: " . $venda->getTotal();
}
catch(VendaException $e){
    print_r("VendaException: ". $e->getMessage() . " código - " . $e->getCodigo());
}
catch(LogicException $e){
    print_r("Logic exception: ". $e->getMessage());
}
finally
{
    echo "<br/>";
    echo "Processo Encerrado";
}

