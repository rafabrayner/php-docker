<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gestão de Usuário</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Usuário</h1>
  <p>Gestão de Usuário</p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-12">

      <div style="display: flex; justify-content: flex-end">
        <a class="btn btn-primary btn-lg" href="lista_usuarios.php" role="button"><i class="fas fa-list"></i> Lista de Usuários</a>
      </div>

      <h3>Cadastrar Usuário</h3>

      <form action="cadastrar.php" method="POST">
        <div class="form-group">
          <label for="nome">Nome *</label>
          <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o Nome" required>
        </div>

        <div class="form-group">
          <label for="telefone">Telefone *</label>
          <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(xx) xxxx-xxxx" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" required>
        </div>

        <div class="form-group">
          <label for="email">Email *</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Digite o Email" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>

    </div>
  </div>
</div>

</body>

<footer>
  <script type="text/javascript">$("#telefone").mask("(00) 0000-0000");</script>
</footer>
</html>
