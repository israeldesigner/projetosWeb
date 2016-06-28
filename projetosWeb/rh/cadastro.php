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
        <form>
          <fieldset class="form-group">
            <label for="cad-usuario">Nome de Usuario</label>
            <input type="text" class="form-control" id="cad-usuario" placeholder="cidade" value="<?php echo $usuario ?>">
            <span class="error bg-danger">* <?php echo $usuarioeErr;?></span>
          </fieldset>
          <fieldset class="form-group">
            <label for="cad-nome">Nome</label>
            <input type="text" class="form-control" id="cad-nome" placeholder="Nome" value="<?php echo $nome ?>">
            <span class="error bg-danger">* <?php echo $nameErr;?></span>
          </fieldset>
          <fieldset class="form-group">
            <label for="cad-sobrenomoe">sobrenomoe</label>
            <input type="text" class="form-control" id="cad-sobrenomoe" placeholder="sobrenomoe" value="<?php echo $sobrenomoe ?>">
            <span class="error bg-danger">* <?php echo $sobrenomoeErr;?></span>
          </fieldset>
          <fieldset class="form-group">
            <label for="cad-email">e-mail</label>
            <input type="email" class="form-control" id="cad-email" placeholder="email" value="<?php echo $email ?>">
            <span class="error bg-danger">* <?php echo $emailErr;?></span>
          </fieldset>
          <fieldset class="form-group">
            <label for="cad-cpf">e-mail</label>
            <input type="text" class="form-control" id="cad-cpf" placeholder="cpf" value="<?php echo $cpf ?>">
            <span class="error bg-danger">* <?php echo $cpfErr;?></span>
          </fieldset>
          <fieldset class="form-group">
            <label for="cad-idade">idade</label>
            <input type="text" class="form-control" id="cad-idade" placeholder="idade" value="<?php echo $idade ?>">
            <span class="error bg-danger">* <?php echo $idadeeErr;?></span>
          </fieldset>
          <fieldset class="form-group">
              <label for="exampleSelect2">UF</label>
              <select multiple class="form-control" id="exampleSelect2">
                <option>CE</option>
                <option>BA</option>
                <option>PI</option>
                <option>PE</option>
                <option>RN</option>
                <option>AL</option>
                <option>SE</option>
                <option>MA</option>
                <option>PB</option>
              </select>
              <label for="cad-cidade">cidade</label>
              <input type="text" class="form-control" id="cad-cidade" placeholder="cidade" value="<?php echo $cidade ?>">
              <span class="error bg-danger">* <?php echo $cidadeeErr;?></span>
          </fieldset>
          <fieldset class="form-group">
            <label for="cad-info">Mensagem</label>
            <textarea class="form-control" id="cad-info" rows="3"><?php echo $info; ?></textarea>
          </fieldset>
          <button type="submit" class="btn btn-primary btn-sm">cadastrar</button>
        </form>
      </div>
   </div>
  </div>
</body>
</html>
