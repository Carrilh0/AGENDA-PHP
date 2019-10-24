<?php 
include('navbar.php');
require_once('vendor/autoload.php');
session_start();

$pDao = new \Src\Models\PessoaDao();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

</head>

<body>
<div class='container'>

<?php if (isset($_SESSION['flash'])):?>
   <center><h2><?php echo $_SESSION['flash'];?></h2></center>
   <?php unset($_SESSION['flash']);?>
<?php endif;?>


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

  <?php foreach($pDao->read() as $teste):?>
    <tbody>
      <tr>
        <td scope='row'><?php echo  $teste->id;?></td>
        <td scope='row'><?php echo  $teste->nome;?></td>
        <td scope='row'><?php echo  $teste->endereco;?></td>
        <td scope='row'><?php echo  $teste->telefone;?></td>
        <td>
          <button onClick='editar(<?php echo $teste->id;?>)' class='btn btn-success btn-sm'>Editar</button>
        </td>
        <td>
          <a href='/Src/Controllers/RemoverPessoa.php' class='btn btn-danger btn-sm'>Apagar
        </td>
      </tr>
    </tbody>

  <?php endforeach;?>
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
    </div>
  </div>
</div>

<script>
  function editar(id){
    
    $('#modalExemplo').modal('show');
    $("#conteudo").load("editarContato.php?id=<?php echo $teste->id;?>");

  }
</script>

</body>

</html>