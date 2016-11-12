<?php
/*$url = (isset($_GET['url'])) ? $_GET['url'] : 'home';
$urlE = explode('/', $url);
$arquivo = $urlE['0'];
//$camada = $urlE['1'];
$paginas = array('empresa', 'contato','institucional','clinico','home','bares');

if($arquivo != 'index') {
    $page = (file_exists($arquivo. ".php")) ? $arquivo : '404';
}*/
$url = (isset($_GET['url'])) ? $_GET['url'] : 'home';
$urlE = explode('/', $url);
$arquivo = $urlE['0'];
$slugs = $urlE['1'];
$paginas = array('empresa','contato','institucional','clinico','home','bares','endoscopia');
if(isset($slugs) && $urlE['1'] !='') {
    include "single.php";
}
elseif(isset($arquivo) && in_array($arquivo, $paginas)) {
    include "$arquivo.php";
}else {
    include "servicos.php";
}

?>



