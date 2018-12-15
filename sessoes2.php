<?php
require_once("config.php");

echo $_SESSION['nome'];
/*
session_unset($_SESSION['nome']); Ele limpa as variáveis de sessão, mas o site te enxerga da mesma maneira
*/


?>

