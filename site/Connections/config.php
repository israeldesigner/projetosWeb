<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_config = "localhost";
$database_config = "seo_site";
$username_config = "root";
$password_config = "";
$urlbase_config  ="http://localhost/estudos/site";
$config = mysql_pconnect($hostname_config, $username_config, $password_config) or trigger_error(mysql_error(),E_USER_ERROR);
?>
