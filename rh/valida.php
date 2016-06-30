<?php
include "config.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>autenticando</title>
    <script type="text/javascript">
      function loginsucesso() {
        setTimeout("window.location = 'admin.php'",5000);
      }
      function loginFalha() {
        setTimeout("window.location = 'login.php'",3000)
      }
    </script>
  </head>
  <body>

  </body>
</html>

<?php
$usuario =$_POST["usuario"];
$senha = $_POST["senha"];
$sql =  mysql_query("SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'") or die (mysql_error());

?>

<?php

$row = mysql_num_rows($sql);

if($row > 0) {
    session_start();
    $_SESSION['usuario'] =$_POST['usuario'];
    $_SESSION['senha'] =$_POST['senha'];
    echo "você foi autentica com suceso";
    echo "<script>loginsucesso()</script>";
  } else {
    echo "nome usuario errado";
    echo "<script>loginFalha()</script>";
  }

 ?>

?>
