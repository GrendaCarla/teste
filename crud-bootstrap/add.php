<?php 
  require_once('customers/functions.php'); 
  add();
?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teste</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body> 

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <div id="main" class="container-fluid">
      <h3 class="page-header">Cadastrar Usuário</h3>

      <hr />

      <form action="add.php"  method="post">

        <div class="row">
          <div class="form-group col-md-5" >
            <label for="name">Nome</label>
            <input type="text" class="form-control" placeholder="nome" autocomplete="off" name="customer['name']">
          </div>
          
          <div class="form-group col-md-5">
            <label for="username">Nome de Usuário</label>
            <input type="text" class="form-control" placeholder="usuario" autocomplete="off" name="customer['username']">
          </div>
        </div>
  
        <div class="row">
          <div class="form-group col-md-5">
            <label for="password">Senha</label>
            <input type="password" class="form-control" placeholder="senha" autocomplete="off" name="customer['password']">
          </div>
        </div>
      
        <hr />
        <div id="actions" class="row">
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="index.php" class="btn btn-secondary">Cancelar</a>
          </div>
        </div>
      </form>

    </div>
  </body>
</html>