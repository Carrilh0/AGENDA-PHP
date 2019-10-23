<?php

namespace Src\Controllers;

Class PessoaController {
    
    private $nome, $endereco, $telefone;

    public function __construct(){
        $this->nome = $_POST['nome'];
    }

    public function teste(){
        echo 'hello';
    }
}