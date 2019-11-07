<?php

namespace src\models;

use src\database\Conexao;

Class Pessoa 
{
    private $id, $nome, $endereco, $telefone;

    public function setId($id)
    {
        $this->id = $id;
    }
    
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }
}