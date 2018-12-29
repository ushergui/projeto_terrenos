<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root". "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");


$id = 2;

$stmt->execute(array($id));

//$conn->rollback(); Comentei pra não deletar

$conn->commit();//Fiz o comando acontecer

echo "Excluído com Sucesso";

?>