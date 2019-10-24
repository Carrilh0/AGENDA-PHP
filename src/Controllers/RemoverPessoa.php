<?php

namespace Src\Controllers;

require_once('../../vendor/autoload.php');

$id = $_GET['id'];

$cadastrar = new \Src\Models\PessoaDao();
$cadastrar->delete($id);

header('Location: ../../index.php');


