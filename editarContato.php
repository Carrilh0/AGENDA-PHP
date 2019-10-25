<?php
require_once('vendor/autoload.php');

$id = $_GET['id'];

$pDao = new \src\models\PessoaDao();
$pessoa = $pDao->find($id);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

</head>

<body>


    <form action="src/controllers/EditarContato.php" method="POST" >
    <div class="form-row">
        
        <input type="text" value="<?php echo $pessoa->id?>"name="id" hidden>   
        <div class="form-group col-md-6">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" value="<?php echo $pessoa->nome?>"name="nome" placeholder="Nome" required>
        </div>
        <div class="form-group col-md-6">
        <label for="endereco">Endereço</label>
        <input type="text" class="form-control" value="<?php echo $pessoa->endereco?>" name="endereco" placeholder="Endereço..." required>
        </div>
    </div>
    <div class="form-group">
        <label for="telefone">Telefone</label>
        <input type="text" class="form-control" value="<?php echo $pessoa->telefone?>" name="telefone" id="telefone" placeholder="(99) 9 99999-9999" required minlength=12>
    </div>
    
    <button type="submit" class="btn btn-block btn-primary" >Salvar</button>
    </form>


<script>
    $(document).ready(function(){
    $('#telefone').mask('(00) 0 0000-0000')
    });
</script>

</body>

</html>