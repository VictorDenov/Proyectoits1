<?php

$DB_HOST = $_ENV["DB_HOST"];
$DB_NAME = $_ENV["DB_NAME"];
$DB_USER = $_ENV["DB_USER"];
$DB_PASS = $_ENV["DB_PASS"];
$DB_PORT = $_ENV["DB_PORT"];
$URL = $_ENV["URL"];


 $con = mysqli_connect("$DB_USER","$DB_PASS","$DB_NAME","$DB_PORT","$URL");
?>
