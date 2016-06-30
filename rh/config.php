
<?php

$hostname_config = "localhost";
$username_config = "root";
$password_config = "";
$database_config = "rh_bd";
$config = mysql_connect($hostname_config, $username_config, $password_config) or die(mysql_error());
mysql_select_db($database_config) or die (mysql_error());

?>
