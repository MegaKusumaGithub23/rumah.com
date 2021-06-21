<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'db_rumah.com';

$conn = mysqli_connect($host, $user, $pass) or die (mysql_error());

mysqli_select_db($conn, $dbname) or die ('no database');
?>