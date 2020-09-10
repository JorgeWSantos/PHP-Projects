<?php

namespace Venda;

use LogicException;
use VendaException\VendaException;

require_once "VendaException.php";

class Venda
{
    private $itens = [];

    public function adicionar($ItemVenda)
    {
        if($ItemVenda == null){
            throw new VendaException(10, "Item nulo");
        }

        array_push($this->itens, $ItemVenda);
    }

    public function getTotal()
    {
        $total = 0;

        if(!count($this->itens))
            throw new LogicException("Não há itens adicionados à venda.");

        foreach($this->itens as $iten)
            $total += $iten->getPreco();

        return $total;
    }
}