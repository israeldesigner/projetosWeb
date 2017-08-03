<?php

$url = (isset($_GET['url'])) ? $_GET['url'] : 'home';
$urlE = explode('/', $url);
$pagina = $urlE['0'];

switch($pagina){
  case 'home':
    echo 'Gastronorte - Gastroentrologia - Endoscopia - Colonoscopia';
    break;
  case 'institucional':
    echo "Gastronorte - diretrizes da clínica";
    break;
  case 'clinico':
    echo "Gastronorte - corpo médico";
    break;
  case 'instalacoes':
    echo "Gastronorte - Instalações da clínica";
    break;
  case 'endoscopia':
    echo "Gastronorte - Exames - endoscopia";
    break;
  case 'colonoscopia':
    echo "Gastronorte - Exames - colonoscopia";
    break;
  case 'biopsias':
    echo "Gastronorte - Exames - Biópsias";
    break;
  case 'polipectomias':
    echo "Gastronorte - Exames - polipectomias";
    break;
  case 'laringoscopia':
    echo "Gastronorte - Exames - laringoscopia";
    break;
  case 'cpre':
    echo "Gastronorte - Exames - CPRE";
    break;
  case 'orientacao-endoscopia':
    echo "Gastronorte - Orientações e preparo endoscopia";
    break;
  case 'orientacao-colonoscopia':
    echo "Gastronorte - Orientações e preparo colonoscopia";
    break;
  case 'convenios':
    echo "Gastronorte - Planos convênios";
    break;
  case 'consultas':
    echo "Gastronorte - cmarcar consulta Gastronorte";
    break;
    case 'unidade-menino-jesus':
      echo "Gastronorte - Unidade localizacão Gastronorte";
      break;
  default:
  echo'Gastronorte - Gastroentrologia - Endoscopia - Colonoscopia';
}
// if($arquivo == 'home') {
//     echo 'Gastronorte - Gastroentrologia - Endoscopia - Colonoscopia';
// }else {
//     echo 'Gastronorte '.$arquivo;
// }

 ?>
