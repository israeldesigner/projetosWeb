<!DOCTYPE html>
<html class="no-js" lang="pt-br">
<head>
  <title><?php include('titulo.php'); ?></title>
  <meta name="description" content="Exames de endoscopia, colonoscopia  com a qualidade profissional que o paciente necessita e localização
     privilegiada no hospital menino jesus bairro Parangaba fotaleza - Ceará Venha nos visitar"/>
  <meta name="keywords" content="Endoscopia, Colonoscopia, biópsias de H. PYLORI, consultas gastro, h
  ospital menino jesus, fortaleza ceará "/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <!-- Bootstrap -->
  <link rel="shortcut icon" href="<?php echo ROOT;?>/img/ico/favicone.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo ROOT;?>/img/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo ROOT;?>/img/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo ROOT;?>/img/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="<?php echo ROOT;?>/img/ico/apple-touch-icon-57-precomposed.png">
  <?php include('styles.html') ?>
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
          <!-- <li class="font-14 mb-5"> <i class="glyphicon glyphicon-time"></i> Segunda a Sextas :00 to 18:00 </li> -->
          <!-- <li class="font-14 mb-5"> <i class="glyphicon glyphicon-envelope"></i><a href="#" class="text-gray">contato@gastronortece.com.br</a> </li> -->
        </ul>
      </div>
    </div>
  </div>
</div>

<header id="header" class="header navbar-scrolltofixed ">
  <div class="container">
    <div class="row">
      <div id="menuzord" class="menuzord blue">
        <a href="<?php echo $siteUrl;?>" class="img-logo"><img src="<?php echo $siteUrl;?>/img/logos/logogastro.jpg" alt="logo gastronorte" title="Logo gastronorte"></a>
        <ul class="menuzord-menu">
          <li><a href="<?php echo $siteUrl;?>">Home</a></li>
          <li><a href="" class="icon-menu" title="Clínica gastronorte">A clínica <i class="glyphicon glyphicon-play"></i></a>
            <ul class="dropdown">
              <li><a href="<?php echo ROOT;?>/institucional" title="diretrizes gastronorte">Institucional</a></li>
              <li><a href="<?php echo ROOT;?>/clinico" title="médicos clínica gastronorte">Corpo Clínico</a></li>
              <li><a href="<?php echo ROOT;?>/instalacoes" title="instalações">Instalações</a></li>
            </ul>
          </li>
          <li><a href="javascript:void(0)" class="icon-menu">Serviços <i class="glyphicon glyphicon-play"></i></a>
            <ul class="dropdown">
              <li><a href="javascript:void(0)" class="icon-menu">Exames <i class="glyphicon glyphicon-play"></i>
                  <ul class="dropdown">
                    <a href="<?php echo ROOT;?>/endoscopia"
                       ><li>Endoscopia</li></a>
                    <a href="<?php echo ROOT;?>/colonoscopia"><li>Colonoscopia</li></a>
                    <a href="<?php echo ROOT;?>/biopsias"><li>Biópsias</li></a>
                    <a href="<?php echo ROOT;?>/polipectomia"><li>Polipectomias</li></a>
                    <a href="<?php echo ROOT;?>/cpre"><li>Gastroenterologia</li></a>
                    <a href="<?php echo ROOT;?>/laringoscopia"><li>CPRE</li></a>
                  </ul>
              </li>
              <li><a href="javascript:void(0)" class="icon-menu">Orientações <i class="glyphicon glyphicon-play"></i>
                  <ul class="dropdown">
                    <a href="<?php echo ROOT;?>/orientacao-endoscopia"><li>Endoscopia</li></a>
                    <a href="<?php echo ROOT;?>/orientacao-colonoscopia"><li>Colonoscopia</li></a>
                  </ul>
              </li>
            </ul>
          </li>
          <li><a href="<?php echo ROOT;?>/convenios">Convênios</a></li>
          <li><a href="javascript:void(0)" class="icon-menu">Contato <i class="glyphicon glyphicon-play"></i></a>
            <ul class="dropdown">
              <li><a href="<?php echo ROOT;?>/consultas" title="marcar consultas">Marcar Consulta</a></li>
              <li><a href="<?php echo ROOT;?>/unidade-menino-jesus" title="unidades gastronorte">Unidades</a></li>
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
                <a href="<?php echo ROOT;?>/endoscopia"><option>Endoscopia</option></a>
                <a href="<?php echo ROOT;?>/colonoscopia"><option>Colonoscopia</option></a>
                <option>Colonoscopia</option>
                <option>Biópsias</option>
                <option>CPRE</option>
                <option>Laringoscopia</option>
              </select>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-6 barra-sele text-center">
        <h3 class="hidden-xs hidden-sm">Gastroentrologia - Cirurgias - Exames</h3>
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
