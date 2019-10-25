<!DOCTYPE html>
<html lang="pt-br">

<head>
<link rel="stylesheet" href='public/css/bootstrap.css'>
</head>

<body>


    <!--MENU-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/">Agenda</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      
    <li class="nav-item">
        <a class="nav-link" href="InserirContato.php">Cadastrar <span class="sr-only">(página atual)</span></a>
      </li>
      
    </ul>
    <div class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" id="search" name="search" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
    </div>
  </div>
</nav>

    
<script type="text/javascript"  src="public/js/jquery-3.4.1.min.js" ></script>
<script type="text/javascript"  src="public/js/jquery.mask.js"></script>
<script type="text/javascript"  src="public/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
$('#telefone').mask('(00) 0 0000-0000')
});
</script>



</body>