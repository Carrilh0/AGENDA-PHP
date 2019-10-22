<?php

require_once 'vendor/autoload.php';


$p = new \Src\Models\Pessoa();
$pDao = new \Src\Models\PessoaDao();


// Create
$p->setNome("Vitor");
$p->setEndereco("Ribeira");
$p->setTelefone("71984257963");

$pDao->create($p);

//Read 

print_r($pDao->read());

//Update 

$p->setId(1);
$p->setNome("Carrilho");
$p->setEndereco("Ribeira");
$p->setTelefone("71999999");

$pDao->update($p);

//Delete

$pDao->delete(12);
