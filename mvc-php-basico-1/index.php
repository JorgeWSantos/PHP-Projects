<?php

use App\App as App;
use App\Lib\Erro as Error;

session_start();

error_reporting(E_ALL & ~E_NOTICE);

require_once "vendor/autoload.php";
require_once "App/App.php";
require_once "App/Lib/Erro.php";

try 
{
    $app = new App();
    $app->run();
} 
catch (Exception $e)
{
    $erro = new Error($e);
    $erro->render();
}