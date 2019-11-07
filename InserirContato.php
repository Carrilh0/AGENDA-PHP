<?php require_once('navbar.php');?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cadastrar</title>
    </head>
    <body>
        <div class='container' style="margin-top: 5%">
            <div class="col-md-12 my-content">
                <h2>Cadastrar Pessoa</h2>
                <form action="src/controllers/pessoaController.php?cadastrar" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" name="nome" required placeholder="Nome">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="endereco">Endereço</label>
                            <input type="text" class="form-control" name="endereco" required placeholder="Endereço...">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" name="telefone" id="telefone" placeholder="(99) 9 99999-9999" required minlength='12' >
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
            </div>
        </div>
    </body>
</html>