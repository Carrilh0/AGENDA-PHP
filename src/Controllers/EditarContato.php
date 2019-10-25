<?php

namespace src\controllers;
session_start();
require_once('../../vendor/autoload.php');

$id = $_POST['id'];
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];

$pessoa = new \src\models\Pessoa();
$pessoa->setId($id);
$pessoa->setNome($nome);
$pessoa->setEndereco($endereco);
$pessoa->setTelefone($telefone);

$cadastrar = new \src\models\PessoaDao();
if ($cadastrar->update($pessoa)) {
    $_SESSION['flash'] = "Pessoa atualizada com sucesso!";
} 

header('Location: ../../index.php');
