<?php 

namespace src\models;

Class PessoaDao {

    public function create(Pessoa $p)
    {
        $create = Conexao::getConexao()->prepare("INSERT INTO pessoa(nome, endereco, telefone) VALUES (?,?,?)");
        return $create->execute([$p->getNome(), $p->getEndereco(), $p->getTelefone()]);
    }

    public function read(){

        $sql = "SELECT * FROM pessoa";    
        $consulta = Conexao::getConexao()->prepare($sql);

        $consulta->execute();

        if($consulta->rowCount() > 0){
            $resultado = $consulta->fetchAll(\PDO::FETCH_OBJ);
            return $resultado;
        }

        return [];
    }

    public function update(Pessoa $p){
        $sql = "UPDATE pessoa SET nome = ?, endereco = ?, telefone = ? WHERE id = ?";

        $update = Conexao::getConexao()->prepare($sql);
        $update->bindValue(1, $p->getNome());
        $update->bindValue(2, $p->getEndereco());
        $update->bindValue(3, $p->getTelefone());
        $update->bindValue(4, $p->getId());

        $update->execute();
    }

    public function delete($id){
        $sql = "DELETE FROM pessoa WHERE id = ?";

        $delete = Conexao::getConexao()->prepare($sql);
        $delete->bindValue(1, $id);
        $delete->execute();

    }

    public function find($id){
        $sql = "SELECT * FROM pessoa WHERE id = ?";
        $consulta = Conexao::getConexao()->prepare($sql);
        $consulta->execute([$id]);
   
        $resultado = $consulta->fetch(\PDO::FETCH_OBJ);
        return $resultado;

    }

}