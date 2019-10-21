<?php

$db = new PDO("mysql:host=localhost; dbname=agenda",'root','');

$sql = "INSERT INTO pessoa VALUES (null,?,?,?)";

$enviar = $db->prepare($sql);
$enviar->bindValue(1,'Vitor');
$enviar->bindValue(2,'3333');
$enviar->bindValue(3,'444');

$enviar->execute();

$sql = "SELECT * FROM PESSOA";
$consulta = $db->prepare($sql);

$consulta->execute();

echo '<pre>';

if($consulta->rowCount() > 0){
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    print_r($resultado);
}