<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "dhksgml";
$mysql_database = "joining";

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("db connect error");
mysql_select_db($mysql_database, $bd) or die("db connect error");

?>
