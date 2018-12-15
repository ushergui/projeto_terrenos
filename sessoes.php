<?php
//existe diferenças entre variáveis locais e as variáveis de sessão
//variável local: funcionam na página onde foram criadas ou usando include ou require
//variável de sessão: Elas são enxergadas enquanto o usuário estiver logado.

require_once("config.php");

$_SESSION["nome"] = "Hcode";



?>

