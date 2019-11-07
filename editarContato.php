<?php
require_once('vendor/autoload.php');
$id = $_GET['id'];
$pessoaDao = new \src\models\PessoaDao();
$pessoa = $pessoaDao->find($id);
?>
<form action="src/controllers/pessoaController.php?editar" method="POST" >
    <div class="form-row">
        <input type="hidden" value="<?php echo $pessoa->id;?>" name="id"> 

        <div class="form-group col-md-6">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" value="<?php echo $pessoa->nome;?>"name="nome" placeholder="Nome" required>
        </div>

        <div class="form-group col-md-6">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" value="<?php echo $pessoa->endereco;?>" name="endereco" placeholder="Endereço..." 
            required>
        </div>
    </div>

    <div class="form-group">
        <label for="telefone">Telefone</label>
        <input type="text" class="form-control" value="<?php echo $pessoa->telefone;?>" name="telefone" id="telefone" placeholder="(99) 9 99999-9999" required minlength=12>
    </div>

    <button type="submit" class="btn btn-block btn-primary">Salvar</button>
</form>

<script>
    $(document).ready(function(){
        $('#telefone').mask('(00) 0 0000-0000')
    });
</script>