<?php 
namespace src\models;
use src\database\Conexao;

Class PessoaDao 
{
    public function create(Pessoa $pessoa)
    {
        $create = Conexao::getConexao()->prepare("INSERT INTO pessoa(nome, endereco, telefone) VALUES (?,?,?)");
        $save = $create->execute([$pessoa->getNome(), $pessoa->getEndereco(), $pessoa->getTelefone()]);

        if ($save) {
            return true;
        }

        return false;
    }

    public function read()
    {
        $sql = "SELECT * FROM pessoa";    
        $consulta = Conexao::getConexao()->prepare($sql);
        $consulta->execute();

        if ($consulta->rowCount() > 0) {
            $resultado = $consulta->fetchAll(\PDO::FETCH_OBJ);
            return $resultado;
        }

        return [];
    }

    public function update(Pessoa $p)
    {
        $sql = "UPDATE pessoa SET nome = ?, endereco = ?, telefone = ? WHERE id = ?";

        $update = Conexao::getConexao()->prepare($sql);
        $update->bindValue(1, $p->getNome());
        $update->bindValue(2, $p->getEndereco());
        $update->bindValue(3, $p->getTelefone());
        $update->bindValue(4, $p->getId());

        return $update->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM pessoa WHERE id = ?";

        $delete = Conexao::getConexao()->prepare($sql);
        $delete->bindValue(1, $id);
        return $delete->execute();
    }

    public function find($id)
    {
        $sql = "SELECT * FROM pessoa WHERE id = ?";
        $consulta = Conexao::getConexao()->prepare($sql);
        $consulta->execute([$id]);
   
        $resultado = $consulta->fetch(\PDO::FETCH_OBJ);
        return $resultado;
    }
}