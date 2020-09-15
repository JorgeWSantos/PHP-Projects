<?php

namespace App\Controllers;

use App\Lib\Sessao as Sessao;
use App\Models\DAO\UsuarioDAO;
use App\Models\Entitys\Usuario as Usuario;

require_once "./App/Models/Entitys/Usuario.php";
require_once "./App/Models/DAO/UsuarioDAO.php";

class UsuarioController extends Controller
{
    public function Cadastro()
    {
        $this->render('/Usuario/Cadastro');

        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
    }

    public function Salvar()
    {
        $usuario = new Usuario();
        $usuario->setNome($_POST['nome']);
        $usuario->setEmail($_POST['email']);

        Sessao::gravaFormulario($_POST);

        $usuarioDAO = new UsuarioDAO();

        if($usuarioDAO->verificarEmail($usuario->getEmail())){
            Sessao::gravaMensagem("Email existente");
            $this->redirect('/usuario/cadastro');
        }

        if ($usuarioDAO->salvar($usuario)) {
            $this->redirect('/usuario/sucesso');
        }
        else{
            Sessao::gravaMensagem("Erro ao gravar usuario");
        }
    }

    public function Sucesso()
    {
        if(Sessao::retornaValorFormulario('nome'))
        {
            $this->render('/usuario/sucesso');
            Sessao::limpaFormulario();
            Sessao::limpaMensagem();
        }
        else
        {
            $this->redirect('/');
        }
    }

    public function index(){
        $this->redirect('/usuario/cadadstro');
    }
}