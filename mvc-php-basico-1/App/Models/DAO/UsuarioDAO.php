<?php

namespace App\Models\DAO;

use App\Models\Entitys\Usuario;
use Exception;

require_once "./App/Models/DAO/BaseDAO.php";

class UsuarioDAO extends BaseDAO
{
    public function verificarEmail($email)
    {
        try {

            $query = $this->select(
                "SELECT * FROM usuario WHERE email = '$email' "
            );

            return $query->fetch();
        } catch (Exception $e) {
            throw new \Exception("Erro no acesso aos dados.", 500);
        }
    }

    public function salvar(Usuario $usuario)
    {
        try {
            $nome = $usuario->getNome();
            $email = $usuario->getEmail();

            return $this->insert(
                'usuario',
                ":nome, :email",
                [
                    ':nome' => $nome,
                    ':email' => $email
                ]
            );
        } catch (Exception $e) {
            throw new Exception("Erro na gravação de dados", 500);
        }
    }
}
