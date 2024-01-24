<?php
$DB_HOST = $_ENV["RAILWAY_DATABASE_HOST"];
$DB_PORT = $_ENV["RAILWAY_DATABASE_PORT"];
$DB_USER = $_ENV["RAILWAY_USERNAME"];
$DB_PASS = $_ENV["RAILWAY_PASSWORD"];
$DB_NAME = $_ENV["RAILWAY_DATABASE"];

$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, $DB_PORT);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Realizar operaciones en la base de datos aquí...

$conn->close();
?>
