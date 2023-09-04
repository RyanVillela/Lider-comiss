<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <title>Bootstrap Example</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
      </head>
<body>
<div id="all_screen">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">LÍDER REP</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>            
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Cliente
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a id="BtnCadCliente" class="dropdown-item">Cadastro</a></li>
                  <li><a class="dropdown-item" href="#">Consulta</a></li>
                </ul>
              </li>
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Pedido
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="#">function</a></li>
                  <li><a class="dropdown-item" href="#">teste</a></li>
                  <li><a class="dropdown-item" href="#">function</a></li>
                  <li><a class="dropdown-item" href="#">function</a></li>
                </ul>
              </li>
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Relatório
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="#">teste</a></li>
                </ul>
              </li>
            </ul>
          </div>         
        </div>
      </nav>
      <div id="conteudo">
        
      </div>
</div>
</body>
<script>
$(document).ready(function(){
  var urlArquivoHTML =  "http://localhost/cadvenda.html"

  $("#BtnCadCliente").click(function(){
    $.ajax({
      url: urlArquivoHTML,
      dataType: 'html',
      success: function(data){
        $("#conteudo").html(data);
      },
      error: function(){
        alert("Erro no Carregamento");
      }
    });
  });
});
</script>
</html>