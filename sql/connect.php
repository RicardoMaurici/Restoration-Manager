<?php

$host = "localhost";
$user = "";
$pass = "";
$db = "rm";
error_reporting(0);
mysqli_connect($host, $user, $pass) or die(mysqli_error());
mysqli_select_db($db) or die('Error conect to DB');
mysqli_query("SET NAMES 'utf8'");
mysqli_query('SET character_set_connection=utf8');
mysqli_query('SET character_set_client=utf8');
mysqli_query('SET character_set_results=utf8');
header('Content-Type: text/html; charset=utf-8');

?>