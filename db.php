<?php

$host = "bl0wa2m5azpzbzvdcqvp-mysql.services.clever-cloud.com";
$servername = "bl0wa2m5azpzbzvdcqvp";
$username = "umhwkiqvyol6lj5o";
$password = "yG72JY7HveBnCJsbQ46a";
$dbname = "tu_base_de_datos";

// Crea la conexión
$conn = new mysqli($host,$username,$password,$dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa";
// ... Puedes realizar consultas y operaciones con la base de datos aquí

// Cierra la conexión al finalizar
$conn->close();
?>





