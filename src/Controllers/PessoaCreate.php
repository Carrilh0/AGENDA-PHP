<?php

namespace src\controllers;
session_start();
require_once('../../vendor/autoload.php');

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];

$pessoa = new \src\models\Pessoa();
$pessoa->setNome($nome);
$pessoa->setEndereco($endereco);
$pessoa->setTelefone($telefone);

$cadastrar = new \src\models\PessoaDao();
if ($cadastrar->create($pessoa)) {
    $_SESSION['flash'] = "Pessoa cadastrada com sucesso!";
} 

header('Location: ../../index.php');
