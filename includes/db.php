<?php
session_start();
$username = "root";
$password = "";
$server = "localhost";
$db_name = "admissione";
$db=mysqli_connect($server, $username, $password, $db_name) or die("Database is not connected !");
$base_url = 'http://localhost/admissione';

// session_start();
// $username = "admishng_dbuser";
// $password = ".uK8guJ{Q[u}";
// $server = "localhost";
// $db_name = "admishng_admissione";
// $db=mysqli_connect($server, $username, $password, $db_name) or die("Database is not connected !");
// $base_url = 'https://www.admissione.com';
?>