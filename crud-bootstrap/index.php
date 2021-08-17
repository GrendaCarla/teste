<?php // Código fonte CRUD e estrutura das páginas: https://webdevacademy.com.br/ ?>


<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php
  require_once('customers/functions.php');
  index();
?>

<?php include('customers/modal.php'); ?>

<?php $db = open_database(); ?>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
<?php endif; ?>

<?php if ($db) : ?>

  <!DOCTYPE html>
  <html lang="pt-br">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Teste</title>

      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link rel="stylesheet" href="fonts/glyphicons-halflings-regular.css">

    </head>
    <body> 

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/main.js"></script>

      <div id="main" class="container-fluid" >
        <div id="top" class="row" >
          <div class="col-md-9">
              <h2>Usuários</h2>
          </div>
      
          <div class="col-md-3">
              <a href="add.php" class="btn btn-primary pull-right h2">Cadastrar Usuário</a>
              <a href="index.php" class="btn btn-secondary pull-right h2"><i class="fa fa-refresh"></i>
                <span class="glyphicon glyphicon-refresh" id="busca"></span> Atualizar
              </a>
          </div>
        </div>

        <hr />

        <div id="list" class="row">
          <div class="table-responsive col-md-12">
            <table class="table table-striped" cellspacing="0" cellpadding="0">
              <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Nome de Usuário</th>
                    <th>Senha</th>
                    <th class="actions" width="30%">Opções</th>
                  </tr>
              </thead>
              <tbody>
                <?php if ($customers) : ?>
                  <?php foreach ($customers as $customer) : ?>
                    <?php if ($customer['softDeletes'] == null) : ?>
                      <tr>
                        <td><?php echo $customer['id']; ?></td>
                        <td><?php echo $customer['name']; ?></td>
                        <td><?php echo $customer['username']; ?></td>
                        <td><?php echo $customer['password']; ?></td>
                        <td class="actions text-right">
                          <a href="view.php?id=<?php echo $customer['id']; ?>" class="btn btn-success btn-xs"><i class="fa fa-eye"></i>
                            <span class="glyphicon glyphicon-eye-open"></span> Visualizar
                          </a>
                          <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i>
                            <span class="glyphicon glyphicon-pencil"></span> Alterar
                          </a>
                          <a href="#" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $customer['id']; ?>">
                            <i class="fa fa-trash"></i><span class="glyphicon glyphicon-trash"></span> Excluir
                          </a>
                        </td>
                      </tr>
                    <?php endif; ?>
                  <?php endforeach; ?>
                <?php else : ?>
                  <tr>
                    <td colspan="6">Nenhum registro encontrado.</td>
                  </tr>
                <?php endif; ?>
              </tbody>
            </table>
          </div>
        </div>

    </body>
  </html>

<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>