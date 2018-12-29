<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Nayara Carolina");
$cad->setEmail("nayaracarolinassp@hotmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();

?>