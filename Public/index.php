<?php 
require_once('navbar.php');
require_once('../vendor/autoload.php');

$pDao = new \Src\Models\PessoaDao();

?>

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
        echo "<td><a href='' class='btn btn-success btn-sm'>Editar<i ></i>";
        echo "<a href='' class='btn btn-danger btn-sm'>Apagar<i ></i></td>";
        echo "<td>";
    }  
    
    ?>
    
    
    
    </tr>
  </tbody>
</table>
</div>