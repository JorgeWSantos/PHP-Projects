<?php

require "controllers/UserController.php";

$pagina = isset($_GET["pagina"])?$_GET["pagina"]:"Index";

$controller = new UserController();

switch($pagina){
    case "Index" :
        $controller -> Index();
    break;
    case "AllUsers" : 
        $controller -> AllUsers();
    break;
    default :
        $controller -> Index();
    break;
}