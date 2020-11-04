<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gestão de Colaboradores</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

  <style>
    .btn-circle.btn-xl {
      width: 70px;
      height: 70px;
      padding: 10px 16px;
      border-radius: 35px;
      font-size: 24px;
      line-height: 1.33;
    }
    .btn-circle {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 30px;
      height: 30px;
      padding: 6px 0px;
      border-radius: 15px;
      font-size: 12px;
      line-height: 1.42857;
    }
  </style>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Usuários</h1>
  <p>Gestão de Usuários</p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-12">

      <div style="display: flex; justify-content: flex-end">
        <a class="btn btn-primary btn-circle btn-xl" href="index.php" role="button"><i class="fas fa-user-plus"></i></a>
      </div>
      
      <h3>Usuários Cadastrados</h3>

      <?php
        require_once "autoload.php";
        use Classes\CadastroRepository;
        CadastroRepository::exibir();
      ?>

    </div>
  </div>
</div>

</body>

<footer>
  <script type="text/javascript">$("#telefone").mask("(00) 0000-0000");</script>
</footer>
</html>
