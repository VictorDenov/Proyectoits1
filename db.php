<?php

    $DB_HOST = $_ENV["DB_HOST"];
    $DB_NAME= $_ENV["DB_NAME"];
    $DB_PASS = $_ENV["DB_PASS"];
    $DB_PORT = $_ENV["DB_PORT"];
    $DB_DATABSE= $_ENV["DB_DATABSE"];
    $con = mysqli_connect("$DB_HOST","$DB_NAME","$DB_PASS","$DB_PORT","$DB_DATABSE");

    if($con)
    {
    }
    else
    {
        echo mysqli_error($con);
    }
    
?>
