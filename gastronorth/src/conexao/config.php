<?php

$hostname_config = "localhost";
$database_config = "gastro_bd";
$username_config = "root";
$password_config = "";
//$urlbase_config  ="http://localhost:8080/clientes/site";
$config = mysql_connect($hostname_config, $username_config, $password_config) or trigger_error(mysql_error(),E_USER_ERROR);

?>