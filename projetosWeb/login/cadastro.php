<?php
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$nivel = 2;
$ativo = 1;


$connect = mysql_connect('localhost','centrobe_login','login123');
$db = mysql_select_db('centrobe_login');

$query_select = "SELECT usuario FROM usuarios WHERE usuario = '$usuario'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['usuario'];

if($usuario == "" || $usuario == null){
        echo"<script language='javascript' type='text/javascript'>alert('O campo usu�rio deve ser preenchido');window.location.href='registro.php';</script>";
 
        }else{
            if($logarray == $usuario){
 
                echo"<script language='javascript' type='text/javascript'>alert('Esse usu�rio j� existe');window.location.href='registro.php';</script>";
                die();
 
            }else{
                $query = "INSERT INTO usuarios (nome,sobrenome,usuario,senha,email,nivel,ativo) VALUES ('$nome','$sobrenome','$usuario','$senha','$email','$nivel','$ativo')";
                $insert = mysql_query($query,$connect);
                 
                if($insert){
                    echo"<script language='javascript' type='text/javascript'>alert('Usu&aacute;rio cadastrado com sucesso!');window.location.href='login.php'</script>";
                }else{
                    echo"<script language='javascript' type='text/javascript'>alert('N�o foi poss�vel cadastrar esse usu�rio');window.location.href='registro.php'</script>";
                }
            }
        }



?>