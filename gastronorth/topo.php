<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Gastronorth - Gastroentrologia - Endoscopia - Colonoscopia</title>
  <meta name="description" content="Exames de endoscopia, colonoscopia  com a qualidade profissional que o paciente necessita e localização
     privilegiada no hospital menino jesus bairro Parangaba fotaleza - Ceará Venha nos visitar"/>
  <meta name="keywords" content="Endoscopia, Colonoscopia, biópsias de H. PYLORI, consultas gastro, hospital menino jesus, fortaleza ceará "/
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <!-- Bootstrap -->
  <link rel="shortcut icon" href="img/icon/favicone.ico" />
  <link href="<?php echo ROOT;?>/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo ROOT;?>/css/estilo.css" rel="stylesheet" media="all">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body class="center clearfix has-side-panel side-panel-right fullwidth-page side-push-panel"><!--class="center clearfix"-->
<div class="body-overlay"></div>
<!--topo header-->
<div id="side-panel" class="dark" data-bg-img="images/bg/bg8.jpg">
  <div class="side-panel-wrap">
    <div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon icon-cancel icon-fechar"></i></a></div>
    <h3>Área Médica</h3>
    <div class="clearfix"></div>
    <div class="">
      <form id="form-imc" name="imc" class="" method="post" >
        <div class="row">
          <div class="form-horizontal">
            <div class="form-group form-group-sm">
              <label class="col-sm-1 control-label" for="formGroupInputSmall">usuário</label>
              <div class="col-sm-11">
                <input class="form-control" type="text" id="formGroupInputSmall" placeholder="login">
              </div>
            </div>
            <div class="form-group form-group-sm">
              <label class="col-sm-1 control-label" for="formGroupInputSmall">Senha</label>
              <div class="col-sm-11">
                <input class="form-control" type="text" id="formGroupInputSmall" placeholder="*******">
              </div>
            </div>
          </div>
          <div class="form-group mb-0 mt-10">
            <button type="submit" class="btn btn-dark btn-theme-colored btn-xs">logar</button>
          </div>
        </div>
      </form>
    </div>
    <div class="side-panel-widget mt-30">
      <div class="widget no-border">
        <ul>
          <li class="font-14 mb-5"> <i class="glyphicon glyphicon-time"></i> Mon-Fri 8:00 to 2:00 </li>
          <li class="font-14 mb-5"> <i class="glyphicon glyphicon-envelope"></i> <a href="#" class="text-gray">contact@yourdomain.com</a> </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<header id="header" class="header navbar-scrolltofixed ">
  <div class="container">
    <div class="row">
      <div id="menuzord" class="menuzord blue">
        <a href="<?php echo $siteUrl;?>" class="img-logo"><img src="<?php echo $siteUrl;?>/img/logos/logogastro.jpg" alt="logo gastronorth" title="Logo gastronorth"></a>
        <ul class="menuzord-menu">
          <li class="active"><a href="<?php echo $siteUrl;?>">Home</a></li>
          <li><a href="" class="icon-menu" title="Clínica gastronorth">A clínica <i class="glyphicon glyphicon-play"></i></a>
            <ul class="dropdown">
              <li><a href="<?php echo $siteUrl;?>/institucional" title="diretrizes gastronorth">Institucional</a></li>
              <li><a href="<?php echo $siteUrl;?>/clinico" title="médicos clínica gastronorth">Corpo Clínico</a></li>
              <li><a href="<?php echo $siteUrl;?>/instalacoes" title="instalações">Instalações</a></li>
            </ul>
          </li>
          <li><a href="javascript:void(0)" class="icon-menu">Serviços <i class="glyphicon glyphicon-play"></i></a>
            <ul class="dropdown">
              <li><a href="<?php echo $siteUrl;?>/exames" title="exames clínicos gastronorth">Exames</a></li>
              <li><a href="<?php echo $siteUrl;?>/orientacoes" title="orientações gastronorth">Orientações</a></li>
            </ul>
          </li>
          <li><a href="<?php echo $siteUrl;?>/convenios">Convênios</a></li>
          <li><a href="javascript:void(0)" class="icon-menu">Contato <i class="glyphicon glyphicon-play"></i></a>
            <ul class="dropdown">
              <li><a href="<?php echo $siteUrl;?>/consultas" title="marcar consultas">Marcar Consulta</a></li>
              <li><a href="<?php echo $siteUrl;?>/unidades" title="unidades gastronorth">Unidades</a></li>
            </ul>
          </li>
          <li><div id="side-panel-trigger" class="side-panel-trigger side-adm"><a href="#"> Acesso <i class="demo-icon icon-stethoscope"></i></a></div></li>
        </ul>
      </div>
    </div>
  </div>
</header>


<section class="barra-pesquisa">
  <div class="container">
    <div class="row">
      <div class="col-md-3 barra-sele">
        <form class="form-horizontal">
          <div class="row">
            <div class="col-md-3">
                <label for="" class="control-label">Selecione</label>
            </div>
            <div class="col-md-9">
              <select class="form-control">
                <option>Serviços</option>
                <option>Convênios</option>
                <option>Exames</option>
                <option>Agenda</option>
                <option>Orientações</option>
              </select>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-6 barra-sele text-center">
        <h3 class="hidden-xs hidden-sm">Gastroentrologia - Cirurgias - Especialidades</h3>
      </div>
      <div class="col-md-3 barra-sele">
        <form class="form-horizontal">
          <div class="row">
            <div class="col-md-12">
              <button type="button" name="button" class="btn btn-default form-inline btn-pesquisar"><i class="glyphicon glyphicon-search"></i></button>
              <input  placeholder="Buscar" class="form-control inp-pesquisar" required type="text">
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
</section>
