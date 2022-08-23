<?php

require("DDBB\connection.php");

$conexion_db = getConnection();

function validarLogin($user, $pass)
{
    global $conexion_db;

    //Consulta con marcadores
    $query = "SELECT * FROM pruductos.users WHERE USER= :user AND PASSWORD= :pass";
    $resultado = $conexion_db->prepare($query);

    //Doy valores a los marcadores
    $resultado->bindValue(":user", $user);
    $resultado->bindValue(":pass", $pass);

    //Ejecuto consulta
    $resultado->execute();

    //Verifico si hubo coincidencia
    $verifiacion = $resultado->rowCount();

    if ($verifiacion != 0) {
        header("location:..\index.php");
    } else {

        //Redirigir a pagina de login
        return false;
    }

    $resultado->closeCursor();
}
