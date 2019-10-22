<?php

require_once 'vendor/autoload.php';

$p = new \Src\Models\Pessoa();

$p->setNome("Vitor");
$p->setEndereco("Ribeira");
$p->setTelefone("71984257963");

$pDao = new \Src\Models\PessoaDao();

$pDao->create($p);
