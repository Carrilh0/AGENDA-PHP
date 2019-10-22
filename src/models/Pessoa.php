<?php

namespace Src\Models;

Class Pessoa{

    private $nome, $endereco, $telefone;

    
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    
    public function getNome(){
        return $this->nome;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function getTelefone(){
        return $this->telefone;
    }

}