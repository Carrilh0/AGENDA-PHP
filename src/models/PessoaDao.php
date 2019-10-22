<?php 

namespace Src\Models;

Class PessoaDao {

    public function create(Pessoa $p){
        $sql = "INSERT INTO pessoa VALUES (null,?,?,?)";

        $create = Conexao::getConexao()->prepare($sql);
        $create->bindValue(1, $p->getNome());
        $create->bindValue(2, $p->getEndereco());
        $create->bindValue(3, $p->getTelefone());

        $create->execute();
    }

    public function read(){

        $sql = "SELECT * FROM pessoa";    
        $consulta = Conexao::getConexao()->prepare($sql);

        $consulta->execute();

        if($consulta->rowCount() > 0){
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        }

        return [];
    }

    public function update(){

    }

    public function delete(){

    }

}