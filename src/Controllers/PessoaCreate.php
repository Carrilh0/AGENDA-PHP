<?php

namespace Src\Controllers;

require_once('../../vendor/autoload.php');

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];

$pessoa = new \Src\Models\Pessoa();
$pessoa->setNome($nome);
$pessoa->setEndereco($endereco);
$pessoa->setTelefone($telefone);

$cadastrar = new \Src\Models\PessoaDao();
$cadastrar->create($pessoa);

header('Location: ../../Public/index.php');


