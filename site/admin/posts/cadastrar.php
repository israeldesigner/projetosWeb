<?php
include_once("sis/restrito.php");
include_once("sis/header.php");
include_once("menu.php");
?>

<h1>Cadastrar posts</h1>

  <form name="admin" action="" enctype="multipart/form-data" method="post">
     <fieldset>
       <label>
         <span class="text">Imagem:</span>
         <input type="text" name="img" size="50" />
       </label>
       
       <label>
         <span class="text">Titulo:</span>
         <input type="text" name="titulo" />
       </label>
       
       <label>
         <span class="text">Categoria:</span>
           <input type="text" name="cat" />
       </label>
       
       <label>
         <span class="text">Tags: <small>(separe por virgulas)</small></span>
         <input type="text" name="tags" />
       </label>
     
       <label>
         <span class="text">Texto:</span>
         <textarea name="texto" rows="10"></textarea>
       </label>
       
       <input type="submit" name="executar" value="Cadastrar" class="btn" />
     
     </fieldset>  
  </form>


<?php include_once("sis/footer.php");