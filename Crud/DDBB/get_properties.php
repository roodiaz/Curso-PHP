<?php

require("connection.php");

$conexion_db = getConnection();

function getItems()
{
    global $conexion_db;

    $query = "SELECT codigo,precio, t.talle, tp.tipo, c.color, tl.tela \n";
    $query .= "FROM productos AS p \n";
    $query .= "INNER JOIN talle AS t ON p.id_talle = t.id\n";
    $query .= "INNER JOIN tipo AS tp ON p.id_tipo= tp.id\n";
    $query .= "INNER JOIN color AS c ON p.id_color = c.id\n";
    $query .= "INNER JOIN tela AS tl ON p.id_tela = tl.id";

    $sentencia = $conexion_db->prepare($query);
    $sentencia->execute(array());
    $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);

    return $resultado;
}

function getColor()
{
    global $conexion_db;

    $query = "SELECT DISTINCT color FROM color";
    $sentencia = $conexion_db->prepare($query);
    $sentencia->execute(array());
    $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);

    return $resultado;
}

function getTalle()
{
    global $conexion_db;

    $query = "SELECT DISTINCT talle FROM talle";
    $sentencia = $conexion_db->prepare($query);
    $sentencia->execute(array());
    $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);

    return $resultado;
}

function getTela()
{
    global $conexion_db;

    $query = "SELECT DISTINCT tela FROM tela";
    $sentencia = $conexion_db->prepare($query);
    $sentencia->execute(array());
    $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);

    return $resultado;
}

function getTipo()
{
    global $conexion_db;

    $query = "SELECT DISTINCT tipo FROM tipo";
    $sentencia = $conexion_db->prepare($query);
    $sentencia->execute(array());
    $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);

    return $resultado;
}
