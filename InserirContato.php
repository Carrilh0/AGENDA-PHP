<?php
require_once('navbar.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

</head>

<body>

<div class='container' style="margin-top: 5%">

    <form action="src/controllers/PessoaCreate.php" method="POST" >
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" placeholder="Nome">
        </div>
        <div class="form-group col-md-6">
        <label for="endereco">Endereço</label>
        <input type="text" class="form-control" name="endereco" placeholder="Endereço...">
        </div>
    </div>
    <div class="form-group">
        <label for="telefone">Telefone</label>
        <input type="text" class="form-control" name="telefone" placeholder="(99) 9 99999-9999">
    </div>
    
    <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

</div>

</body>

</html>