<?php
$DB_HOST = $_ENV["MYSQLHOST"];
$DB_PORT = $_ENV["MYSQLPORT"];
$DB_USER = $_ENV["MYSQLUSER"];
$DB_PASS = $_ENV["MYSQLPASSWORD"];
$DB_NAME = $_ENV["MYSQL_DATABASE"];

$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, $DB_PORT);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

$conn->close();
?>







