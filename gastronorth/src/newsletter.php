  <!DOCTYPE html>
<html lang="pt-br">
<head>
		<title>Newsletter</title>
        <link rel="shortcut icon" href="img/icon/favicon.ico" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<!-- Bootstrap -->
        
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        
        <link href="css/estilo.css" rel="stylesheet" media="all">
        <link href="css/estiloProdutos.css" rel="stylesheet" media="all">
        
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="center clearfix"><!--class="center clearfix"-->
    
<?php include('topo.php')?> 
<header class="container faixaHeader">

    <div class="row">
         <img src="img/bgnewsletter.png" class="img-responsive"/>
    </div>
</header>
    
<section class="container conteudoEmpresa">
   <div class="col-md-7 col-xs-offset-5">
       <h2><img src="img/icon/newsletter2.png"/>Newsletter</h2>
   </div>
    <div class="col-md-10">
       <p>Serviço de envio de newsletter, você receberá as principais notícias relacionadas a seu ramo de atividade ou área do interesse da sua empresa por email. </p>
    </div>
   </div>

    <div class="row">

  <article class="col-xs-12 textoProdutos">

      <div id="form_cad_cliente" title="Contato">

        <form class="form-horizontal formParcerias">

        <fieldset>
        <!-- Form Name -->
        <legend>Cadastro</legend>   
        <!-- Text input-->
        
        <div class="form-group">
          <label class="col-md-4 control-label">Nome</label>  
          <div class="col-md-5">
          <input id="nomeNews"  placeholder="Nome" class="form-control input-md" required type="text">
          </div>
        </div>  
        
        <div class="form-group">
          <label class="col-md-4 control-label">Email</label>  
          <div class="col-md-5">
          <input id="emailNews"  placeholder="@email" class="form-control input-md" required type="email">
          </div>
        </div>          
        
        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="btnNews"></label>
          <div class="col-md-4">
            <button id="btnNews" name="btnNews" class="btn btn-info btnNews">Cadastrar</button>
          </div>
        </div>
        
        </fieldset>
        </form>

    </div>

  </article>

  </div>

</section> 
<?php include('rodape.php') ?>

	</body>
</html>