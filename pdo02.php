<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root". "");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "jose";
$password = "123456";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);


$stmt->execute();

echo "Cadastrado com Sucesso";
/*
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);



foreach ($results as $row) {
	
	foreach ($row as $key => $value){
		
		echo "<strong>".$key.":</atrong>". $value."<br/>";
		
	}
	
	echo "==============================================================";
}
 
	*/
?>