<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet/sass" type="text/css" href="style.sass" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body class="principal">
  <div class="container">
    <div class="row">
      <div class="form-rh">
        <form method="post" action="valida.php">
          <fieldset class="form-group">
            <label for="cad-usuario">Nome de Usuario</label>
            <input type="text" name="usuario" class="form-control" id="cad-usuario" placeholder="cidade" value="">
            <!--<span class="error bg-danger"></span>-->
          </fieldset>
          <fieldset class="form-group">
            <label for="cad-nome">Senha</label>
            <input type="password" name="senha" class="form-control" id="cad-nome" placeholder="senha" value="">
            <!--<span class="error bg-danger"></span>-->
          </fieldset>
          <button type="submit" class="btn btn-primary btn-sm">cadastrar</button>
        </form>
      </div>
   </div>
  </div>
</body>
</html>
