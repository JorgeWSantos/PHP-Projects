<?php

namespace ItemVenda;

class ItemVenda
{
    private $preco;
    private $descricao;

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($novoPreco)
    {
        $this->preco = $novoPreco;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($novaDescricao)
    {
        $this->descricao = $novaDescricao;
    }
}