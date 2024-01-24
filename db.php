
<?php
$DB_HOST = $_ENV["RAILWAY_TCP_PROXY_DOMAIN"];
$DB_PORT = $_ENV["RAILWAY_TCP_PROXY_PORT"];
$DB_USER = "root";
$DB_PASS = $_ENV["MYSQL_ROOT_PASSWORD"];
$DB_NAME = $_ENV["MYSQL_DATABASE"];

$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, $DB_PORT);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

$conn->close();
?>

