<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");

if ($conn->connect_error){
	
	echo "Error ". $coon->connect_error;
	
}

$stmt = $conn->prepare("insert into tb_usuarios (deslogin, dessenha) VALUES (?, ?)");

$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "123456";

$stmt->execute();

$login = "root";
$pass = "654321";

$stmt->execute();
?>