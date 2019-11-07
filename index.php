<?php 
include('navbar.php');
require_once('vendor/autoload.php');
$pessoaDao = new \src\models\PessoaDao();
?>
<!DOCTYPE html>

  <head>
    <title>Contatos PHP</title>
  </head>

  <body>
    <div class='container'>
      <?php require_once('sessionFlash.php');?>

      <div class="col-md-12 my-content">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nome</th>
              <th scope="col">Endereço</th>
              <th scope="col">Telefone</th>
              <th scope="col">Ação</th>
            </tr>
          </thead>

          <?php foreach($pessoaDao->read() as $pessoa):?>
            <tbody>
              <tr>
                <td scope='row'><?php echo  $pessoa->id;?></td>
                <td scope='row'><?php echo  $pessoa->nome;?></td>
                <td scope='row'><?php echo  $pessoa->endereco;?></td>
                <td scope='row'><?php echo  $pessoa->telefone;?></td>
                <td>
                  <button onClick='editar(<?php echo $pessoa->id;?>)' class='btn btn-success btn-sm'>Editar</button>
                  <a href='/src/controllers/pessoaController.php?id=<?php echo $pessoa->id;?>&deletar' class='btn btn-danger btn-sm'>
                    Deletar
                  </a>
                </td>
               
              </tr>
            </tbody>

        <?php endforeach;?>
      </table>
      </div>
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
          Carregando...
        </div>
      </div>
    </div>
  </div>

  <script>
    function editar(id){
      $('#modalExemplo').modal({backdrop: 'static'});
      $("#conteudo").load("editarContato.php?id="+id);

    }

    $('#search').keyup(function(){
      var text = $(this).val();
      $('table tbody').find('tr').each(function(){
        var conteudo = $(this).find('td').text();
        var corresponde = conteudo.toLowerCase().indexOf(text) >=0;
        $(this).css('display', corresponde ? '' : 'none');
      });
    });

  </script>
  
  <br>
  </body>

</html>
