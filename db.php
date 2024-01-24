<?php
$DB_HOST = $_ENV["monorail.proxy.rlwy.net"];
$DB_PORT = $_ENV["28758"];
$DB_USER = $_ENV["root"];
$DB_PASS = $_ENV["e15hcAEEHd14hEa233G3Dc5552F5a6FA"];
$DB_NAME = $_ENV["railway"];

$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, $DB_PORT);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

$conn->close();
?>







