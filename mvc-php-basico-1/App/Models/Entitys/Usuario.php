<?php

namespace App\Models\Entitys;

class Usuario
{
    private $nome;
    private $email;

    public function setNome($novo_nome)
    {
        $this->nome = $novo_nome;
    }

    public function setEmail($novo_email)
    {
        $this->email = $novo_email;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getEmail()
    {
        return $this->email;
    }
}