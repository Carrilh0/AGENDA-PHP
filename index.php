<?php 
include ('navbar.php');
require_once 'vendor/autoload.php';

$pDao = new \Src\Models\PessoaDao();



?>


<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Endereço</th>
      <th scope="col">Telefone</th>
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
        echo "<td>";
    }  
    
    ?>
    
    
    </tr>
  </tbody>
</table>