<!DOCTYPE html>
<?php
include "config.php";
?>

<?php
/*session_start();
if(!isset($_SESSION["usuario"]) || !isset($_SENHA["senha"])) {
    header("location:login.php");
    exit;
}else {
  echo "você está logado";
}*/

/*session_start();
if (!isset($_SESSION["usuario"]) || !isset($_SENHA["senha"])) {
	header('Location: login.php');
	exit();
}else {
  echo "estou logado";
}*/

 ?>
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
	<body class="admin">
    <header class="cabecalho">
       <div class="container-fluid">
         <div class="row">
           RH SYSTEM
         </div>
       </div>
    </header>
    <div class="container">
      <div class="row">
        <div class="form-admin col-md-12">
          <div id="form_cad_cliente" title="Contato">
            <form class="form-horizontal formParcerias" method="post" action="">
            <fieldset>
            <!-- Form Name -->
            <legend>Informações de Contato</legend>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label">Nome</label>
              <div class="col-md-5">
              <input id="nome_cad"  placeholder="Nome Completo" class="form-control input-md" required type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">CPF</label>
              <div class="col-md-5">
              <input id="nome_cad"  placeholder="CPF" name="cpf" class="form-control input-md" required type="text">
              </div>
            </div>
            <!-- Text input-->
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="endText">Endereço</label>
              <div class="col-md-3 endText">
              <input id="endereco_cad" name="endText" placeholder="endereço" class="form-control input-md" required type="text">
              </div>
              <label class="col-md-1 control-label">Número</label>
              <div class="col-md-1">
              <input id="numero_cad" name="endText" placeholder="Nº" class="form-control input-md" required type="text">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label">Complemento</label>
              <div class="col-md-2">
              <input id="complemento_cad" name="endText" placeholder="complemento" class="form-control input-md" required type="text">
              </div>
              <label class="col-md-1 control-label">Bairro</label>
              <div class="col-md-2">
              <input type="text" id="bairro_cad" class="form-control input-md pull-left" required>
              </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="estadoText">UF</label>
              <div class="col-md-1">
                <select id="uf_cad" name="estadoText" class="form-control">
                  <option value="1">AC</option>
                  <option value="2">AL</option>
                  <option value="3">AP</option>
                  <option value="4">AM</option>
                  <option value="5">BA</option>
                  <option value="6">CE</option>
                  <option value="7">DF</option>
                  <option value="8">ES</option>
                  <option value="9">GO</option>
                  <option value="10">MA</option>
                  <option value="11">MT</option>
                  <option value="12">MS</option>
                  <option value="13">MG</option>
                  <option value="14">PA</option>
                  <option value="15">PB</option>
                  <option value="16">PR</option>
                  <option value="17">PE</option>
                  <option value="18">PI</option>
                  <option value="19">RJ</option>
                  <option value="20">RN</option>
                  <option value="21">RS</option>
                  <option value="22">RO</option>
                  <option value="23">RR</option>
                  <option value="24">SC</option>
                  <option value="25">SP</option>
                  <option value="26">SE</option>
                  <option value="27">TO</option>
                </select>
              </div>
              <label class="col-md-1 control-label" for="cidText">Cidade</label>
              <div class="col-md-3">
              <input id="municipio_cad"  placeholder="cidade" class="form-control input-md pull-left" required type="text">
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="cepText">CEP</label>
              <div class="col-md-5">
              <input id="cep_cad" name="cepText" placeholder="cep" class="form-control input-md" required type="text">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="emailText">email</label>
              <div class="col-md-5">
              <input id="email_cad" name="emailText" placeholder="@email" class="form-control input-md" required type="email">
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="telText">Tel .:</label>
              <div class="col-md-5">
              <input id="tel_cad" name="tel_cad" placeholder="telefone fixo" class="form-control input-md" required type="text">
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="telcelText">Tel CEL .:</label>
              <div class="col-md-5">
              <input id="tel_cel_cad" name="tel_cel_cad" placeholder="Telefone Celular" class="form-control input-md" required type="text">
              </div>
            </div>
            <!-- Textarea -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="msgText">Mensagem</label>
              <div class="col-md-5">
                <textarea class="form-control" id="msgText" name="msgText"></textarea>
              </div>
            </div>
            <!-- Button -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="btnEnviar"></label>
              <div class="col-md-4">
                <button id="btnEnviaParceiros" name="btnEnviaParceiros" class="btn btn-primary btnEnviar">enviar</button>
              </div>
            </div>
            </fieldset>
            </form>

        </div>

        </div>
     </div>
    </div>
</body>
</html>
