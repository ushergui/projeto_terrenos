<?php

$nome = (int)$_GET["a"];

//var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;
echo "<br>";
$ip2 = $_SERVER["SCRIPT_NAME"];
echo $ip2;

//As partes da URL chamam URI



?>