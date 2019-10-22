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
            $resultado = $consulta->fetchAll(\PDO::FETCH_ASSOC);
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

}