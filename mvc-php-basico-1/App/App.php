<?php

namespace App;

use App\Controllers\HomeController;
use Exception;

require_once "App/Controllers/HomeController.php";
require_once "App/Controllers/UsuarioController.php";

class App
{

    private $controller;
    private $controllerFile;
    private $controllerName;
    private $action;
    private $params;

    public function __construct()
    {
        /*
        * Constantes do sistema
        */

        define('APP_HOST', $_SERVER['HTTP_HOST'].'/mvc-php-basico-1');
        define('PATH', realpath('./'));
        define('TITLE', "Primeira aplicação MVC em PHP");
        define('DB_HOST', "localhost");
        define('DB_USER', "root");
        define('DB_PASSWORD', "minionlord1425");
        define('DB_NAME', "devmedia");
        define('DB_DRIVER', "mysql");
        $this->url();
    }

    public function run()
    {
        if($this->controller){
            $this->controllerName = ucwords($this->controller) . 'Controller';
            $this->controllerName = $this->controllerName;
        }
        else{
            $this->controllerName = 'HomeController';
        }

        $this->controllerFile = $this->controllerName . '.php';
        $this->action = $this->action;

        if(!$this->controller)
        {
            $this->controller = new HomeController($this);
            $this->controller->index();
        }

        $nomeClasse = '\\App\\Controllers\\' . $this->controllerName;
        $objetoController = new $nomeClasse($this);

        if(!class_exists($nomeClasse))
            throw new Exception("Erro na aplicação", 500);

        if(method_exists($objetoController, $this->action))
        {
            $objetoController->{$this->action}($this->params);
            return;
        }
        elseif(!$this->action && method_exists($objetoController, 'index'))
        {
            $objetoController->index($this->params);
            return;
        }
        else
            throw new Exception("Página inexistente", 1);
    }

    public function url()
    {
        $path = $_GET['url'];

        if(isset($path)){

            $path = rtrim($path, '/');
            $path = filter_var($path, FILTER_SANITIZE_URL);
            $path = explode('/', $path);

            $this->controller = $this->verificaArray($path, 0);
            $this->action = $this->verificaArray($path, 1);

            if (count($path)>2) {
                unset($path[0]);
                unset($path[1]);
                $this->params = array_values($path);
            }
        }
    }

    public function verificaArray($array, $key)
    {
        $value = $array[$key];

        if(isset($value) && !empty($value))
            return $value;

        return null;
    }

    public function getController()
    {
        return $this->controller;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function getControllerName()
    {
        return $this->controllerName;
    }

    public function getParams()
    {
        return $this->params;
    }
}