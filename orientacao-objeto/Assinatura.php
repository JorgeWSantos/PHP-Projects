<?php

include_once('./Produto.php');
include_once('./IExpiravel.php');

class Assinatura extends Produto implements IExpiravel{

    private $dataExpiracao;

    public function getDataExpiracao(){
        return $this->dataExpiracao;
    }

    public function setDataExpiracao($newDataExpiracao){
        $this->dataExpiracao = new DateTime($newDataExpiracao);
    }

    public function getTempoRestante(){
        return $this->dataExpiracao->diff(new DateTime());
    }
}