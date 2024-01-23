<?php

$DB_HOST = $_ENV["DB_HOST"];
$DB_NAME = $_ENV["DB_NAME"];
$DB_USER = $_ENV["DB_USER"];
$DB_PASS = $_ENV["DB_PASS"];
$DB_PORT = $_ENV["DB_PORT"];

$con = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, $DB_PORT);

if ($con) {
    // La conexión fue exitosa, puedes realizar operaciones con la base de datos aquí.
} else {
    // Hubo un error en la conexión, puedes imprimir el mensaje de error.
    echo mysqli_error($con);
}

?>
