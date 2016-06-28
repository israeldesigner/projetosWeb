<?php
  $url = $_GET['url'];
  $urlE = explode('/', $url);
  $arquivo = $urlE['0'];
  $post = $urlE['1'];
  $paginas = array('empresa', 'contato');

  if(isset($_GET['s']) && $_GET['s'] !='') {
      include "search.php";
  }elseif(isset($post) && $post !='') {
      include "single.php";
  }elseif(isset($arquivo) && in_array($arquivo, $paginas)) {
      include "$arquivo.php";
  }elseif(isset($arquivo) && $arquivo =='') {
      include "home.php";
  }else {
      include "categoria.php";
  }

?>
