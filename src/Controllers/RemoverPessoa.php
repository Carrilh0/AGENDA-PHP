<?php

namespace src\controllers;

require_once('../../vendor/autoload.php');

$id = $_GET['id'];

$cadastrar = new \src\models\PessoaDao();
$cadastrar->delete($id);

header('Location: ../../index.php');


