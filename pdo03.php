<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root". "");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha :PASSWORD WHERE idusuario = :ID");

$login = "joao";
$password = "asdggerwe";
$id = 2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);


$stmt->execute();

echo "Alterado com Sucesso";
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