<?php
$host = "localhost";
$user = "";
$pass = "";

$db   = "rm";
error_reporting(0);
mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($db) or die('Error connecting to DB');
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');
header('Content-Type: text/html; charset=utf-8');

?>