<?php
$DB_HOST = $_ENV["DB_HOST"];
$DB_PORT = $_ENV["DB_PORT"];
$DB_USER = $_ENV["DB_USER"];
$DB_PASS = $_ENV["DB_PASS"];
$DB_NAME = $_ENV["DB_NAME"];

$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, $DB_PORT);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

$conn->close();
?>







