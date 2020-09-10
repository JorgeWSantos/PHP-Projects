<?php

    include_once('./Assinatura.php');
    include_once('./Produto.php');

    $Assinatura = new Assinatura();
    $Assinatura->setCodigo(123);
    $Assinatura->setNome("Jorge");
    $Assinatura->setPreco(200.00);
    $Assinatura->setDataExpiracao('2020/10/08');

    echo "Dias restantes da assinatura: {$Assinatura->getTempoRestante()->days}";