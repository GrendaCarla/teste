<?php 
  require_once('customers/functions.php'); 
	view($_GET['id']);
?>

<?php include('customers/modal.php'); ?>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <div id="main" class="container-fluid">
      <h3 class="page-header">Usuário <?php echo $customer['username']; ?></h3>
      
      <?php if (!empty($_SESSION['message'])) : ?>
        <div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
      <?php endif; ?>

      <hr />

      <div class="row">
        <div class="form-group col-md-5" >
          <label for="name"><dt>ID:</dt></label> &nbsp
          <?php echo $customer['id']; ?>
        </div>
        
        <div class="form-group col-md-5">
          <label for="username"><dt>Nome:</dt></label> &nbsp
          <?php echo $customer['name']; ?>
        </div>
      </div>

      <div class="row">
        <div class="form-group col-md-5" >
          <label for="name"><dt>Nome de Usuário:</dt></label> &nbsp
          <?php echo $customer['username']; ?>
        </div>
        
        <div class="form-group col-md-5">
          <label for="username"><dt>Senha:</dt></label> &nbsp
          <?php echo $customer['password']; ?>
        </div>
      </div>
    
      <hr />

      <div id="actions" class="row">
        <div class="col-md-12">
          <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-primary">Alterar</a>
          <a href="index.php" class="btn btn-secondary">Voltar</a>
          <a href="#" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $customer['id']; ?>">
            <i class="fa fa-trash"></i><span class="glyphicon glyphicon-trash"></span> Excluir
          </a>
        </div>
      </div>
    </div>
    
  </body>
</html>