<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_central = "localhost";
$database_central = "gestion_calidad";
$username_central = "root";
$password_central = "";
$central = mysql_pconnect($hostname_central, $username_central, $password_central) or trigger_error(mysql_error(),E_USER_ERROR); 
?>