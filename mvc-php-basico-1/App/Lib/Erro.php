<?php

namespace App\Lib;

use Exception;

class Erro
{
    private $message;

    public function __construct(Exception $exception)
    {
        // $this->code = $exception->getCode();
        $this->message = $exception->getMessage();
    }

    public function render()
    {
        $errorMessage = $this->message;

        require_once PATH . '\App\Views\Error\Error.php';

        exit;
    }
}