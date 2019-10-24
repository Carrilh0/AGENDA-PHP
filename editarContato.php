<?php
require_once('vendor/autoload.php');

$id = $_GET['id'];

$pDao = new \Src\Models\PessoaDao();
$pessoa = $pDao->find($id);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

</head>

<body>


    <form action="Src/Controllers/PessoaCreate.php" method="POST" >
    <div class="form-row">
        
        <input type="text" value="<?php echo $pessoa->id?>"name="id" hidden>   
        <div class="form-group col-md-6">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" value="<?php echo $pessoa->nome?>"name="nome" placeholder="Nome">
        </div>
        <div class="form-group col-md-6">
        <label for="endereco">Endereço</label>
        <input type="text" class="form-control" value="<?php echo $pessoa->endereco?>" name="endereco" placeholder="Endereço...">
        </div>
    </div>
    <div class="form-group">
        <label for="telefone">Telefone</label>
        <input type="text" class="form-control" value="<?php echo $pessoa->telefone?>" name="telefone" placeholder="(99) 9 99999-9999">
    </div>
    
    <a  class="btn btn-block btn-primary" href="/Src/Controllers/EditarContato.php">Salvar</a>
    </form>



</body>

</html>