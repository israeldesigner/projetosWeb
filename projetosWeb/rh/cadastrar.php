<?php

include "config.php";

$nome = trim($_POST['nome']);
$sobrenome = trim($_POST['sobrenome']);
$email = trim($_POST['email']);
$usuario = trim($_POST['usuario']);
$cpf = trim($_POST['cpf']);
$idade = trim($_POST['idade']);
$info = trim($_POST['info']);
$cidade = trim($_POST['cidade']);

$nomeErr = $sobrenomeErr = $emailErr =  $cpfErr = $usuarioErr = $idadeErr = $cidadeErr = "";
$nome = $sobrenome = $email = $cpf = $usuario = $idade = $cidade = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($nome)) {
    $nameErr = "Name is required";
  } else {
    $nome = test_input($_POST["nome"]);
  }

  if (empty($sobrenome)) {
    $sobrenomeErr = "sobre nome obrigatório";
  } else {
    $sobrenome = test_input($_POST["sobrenome"]);
  }

  if (empty($email)) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($cpf)) {
    $cpfErr = "Cpf obrigatório";
  } else {
    $cpf = test_input($_POST["cpf"]);
  }

  if (empty($usuario)) {
    $usuarioErr = "nome de usuário obrigatório";
  } else {
    $cpf = test_input($_POST["usuario"]);
  }

  if (empty($idade)) {
    $idadeErr = "campo idade obrigatório";
  } else {
    $idade= test_input($_POST["idade"]);
  }

  if (empty($cidade)) {
    $cidadeErr = "campo idade obrigatório";
  } else {
    $cidade= test_input($_POST["cidade"]);
  }

}

$sql_email_check = mysql_query(
"SELECT COUNT(usuario_id) FROM users WHERE email='{$email}'"
);

$sql_usuario_check = mysql_query(
"SELECT COUNT(usuario_id) FROM users WHERE usuario='{$usuario}'"
);

$eReg = mysql_fetch_array($sql_email_check);
$uReg = mysql_fetch_array($sql_usuario_check);

$email_check = $eReg[0];
$usuario_check = $uReg[0];

if (($email_check > 0) || ($usuario_check > 0)){

echo "<strong>ERRO</strong>: <br /><br />";

if ($email_check > 0){

echo "Este email já está sendo utilizado.<br /><br />";

unset($email);

}

if ($usuario_check > 0){

echo "Este nome de usuário já está sendo
utilizado.<br /><br />";

unset($usuario);

}

include "cadasstro.php";

}else{

function makeRandomPassword(){

$salt = "abchefghjkmnpqrstuvwxyz0123456789";
srand((double)microtime()*1000000);

$i = 0;
while ($i <= 7){
$num = rand() % 33;
$tmp = substr($salt, $num, 1);
$pass = $pass . $tmp;
$i++;

}

return $pass;

}

$senha_randomica = makeRandomPassword();
$senha = md5($senha_randomica);


// Inserindo os dados no banco de dados

$info = htmlspecialchars($info);

$sql = mysql_query(

"INSERT INTO users
(nome, sobrenome, email, cpf, usuario, senha, info, cidade, data_cadastro)

VALUES
('$nome', '$sobrenome', '$email', '$cpf', '$usuario', '$senha', '$info', '$cidade' now())")

or die( mysql_error()

);

if (!$sql){

echo "Ocorreu um erro ao criar sua conta, entre em contato.";

}else{

$usuario_id = mysql_insert_id();

// Enviar um email ao usuário para confirmação e ativar o cadastro!

$headers = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";
$headers .= "From: Teu Domínio - Webmaster<email@teusite.com.br>";

$subject = "Confirmação de cadastro - teusite.com.br";
$mensagem = "Prezado {$nome} {$sobrenome},<br />
Obrigado pelo seu cadastro em nosso site, <a href='http://www.teusite.com.br'>
http://www.teusite.com.br</a>!<br /> <br />

Para confirmar seu cadastro e ativar sua conta em nosso site, podendo acessar à
áreas exclusivas, por favor clique no link abaixo ou copie e cole na barra de
endereço do seu navegador.<br /> <br />

<a href='http://www.teusite.com.br/ativar.php?id={$usuario_id}&code={$senha}'>

http://www.teusite.com.br/ativar.php?id={$usuario_id}&code={$senha}

</a>

<br /> <br />
Após a ativação de sua conta, você poderá ter acesso ao conteúdo exclusivo
efetuado o login com os seguintes dados abaixo:<br > <br />

<strong>Usuario</strong>: {$usuario}<br />
<strong>Senha</strong>: {$senha_randomica}<br /> <br />

Obrigado!<br /> <br />

Webmaster<br /> <br /> <br />
Esta é uma mensagem automática, por favor não responda!";

mail($email, $subject, $mensagem, $headers);

echo "Foi enviado para seu email - ( ".$email." ) um pedido de
confirmação de cadastro, por favor verifique e sigas as instruções!";

}

}

}

 ?>
