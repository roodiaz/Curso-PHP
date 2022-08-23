<?php

function getConnection()
{

    require("config.php");

    try {

        //Conexion
        $conexion_db = new PDO("mysql:host=" . $hostname . "; dbname=" . $database, $username, $password);
        $conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion_db->exec("SET CHARACTER SET utf8");

        return $conexion_db;

    } catch (Exception $ex) {

        die("Error: " . $ex->getMessage());
    }
}

?>
