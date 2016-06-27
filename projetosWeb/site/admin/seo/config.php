<?php
include_once("sis/restrito.php");
include_once("sis/header.php");
include_once("menu.php");
?>

<h1>SEO Config</h1>

  <form name="admin" action="" enctype="multipart/form-data" method="post">
     <fieldset>
       <label>
         <span class="text">Titulo:</span>
         <input type="text" name="titulo" />
       </label>
     
       <label>
         <span class="text">Descrição:</span>
         <input type="text" name="desc" />
       </label>
       
       <label>
         <span class="text">Palavras chave:</span>
         <input type="text" name="tags" />
       </label>
       
       <input type="submit" name="executar" value="Editar" class="btn" />
     
     </fieldset>  
  </form>


<?php include_once("sis/footer.php");