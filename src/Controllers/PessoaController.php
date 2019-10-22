<?php

Class PessoaController {
    
    private $nome, $endereco, $telefone;

    public function __construnct(){
        $this->nome = $_POST['nome'];
        teste();
    }

    public function teste(){
        echo 'hello';
    }
}