<?php 
namespace src\controllers;
use src\database\Conexao;
use src\helpers\Session;

require_once('../../vendor/autoload.php');

if (isset($_GET['cadastrar'])) {
	
	$nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];

    $pessoa = new \src\models\Pessoa();
    $pessoa->setNome($nome);
    $pessoa->setEndereco($endereco);
    $pessoa->setTelefone($telefone);

    $pessoaDao = new \src\models\PessoaDao();
	if ($pessoaDao->create($pessoa)) {
		Session::flash('success', 'Pessoa cadastrada com Sucesso!');
	}

    header('Location: ../../index.php');
}

if (isset($_GET['editar'])) {

	$id = $_POST['id'];
	$nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];

    $pessoa = new \src\models\Pessoa();
    $pessoa->setId($id);
    $pessoa->setNome($nome);
    $pessoa->setEndereco($endereco);
    $pessoa->setTelefone($telefone);

    $pessoaDao = new \src\models\PessoaDao();
	if ($pessoaDao->update($pessoa)) {
		Session::flash('success', 'Pessoa editada com Sucesso!');
	}

    header('Location: ../../index.php');
}

if (isset($_GET['deletar'])) {

	$id = $_GET['id'];

	$pessoaDao = new \src\models\PessoaDao();
	if ($pessoaDao->delete($id)) {
		Session::flash('success', 'Pessoa deletada com Sucesso!');
	}

	header('Location: ../../index.php');
}