<?php 
include('navbar.php');
require_once('vendor/autoload.php');

$pDao = new \Src\Models\PessoaDao();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

</head>

<body>
<div class='container'>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Endereço</th>
      <th scope="col">Telefone</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    
    <?php   
    
    foreach($pDao->read() as $teste){
        echo "<tr>";
        echo "<th scope='row'> $teste[id]</th>";
        echo "<td>$teste[nome]</td>";
        echo "<td>$teste[endereco]</td>";
        echo "<td> $teste[telefone]</td>";
        echo "<td><button onClick='editar()' class='btn btn-success btn-sm'>Editar</button >";
        echo "<a href='/Src/Controllers/RemoverPessoa.php?id=$teste[id]' class='btn btn-danger btn-sm'>Apagar</td>";
        echo "<td>";
    }  
    
    ?>
    
    
    
    </tr>
  </tbody>
</table>
</div>


<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Contato</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="conteudo" class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar mudanças</button>
      </div>
    </div>
  </div>
</div>

<script>
  function editar(id){
    $('#modalExemplo').modal('show');
    $("#conteudo").load("InserirContato.php");
  }
</script>

</body>

</html>