<?php

try{

    //Conexion
    $conexion_db=new PDO("mysql:host=localhost; dbname=pruductos", "root","");
	$conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conexion_db->exec("SET CHARACTER SET utf8");

    //Consulta con marcadores
    $query="SELECT * FROM pruductos.users WHERE USER= :user AND PASSWORD= :pass";
	$resultado=$conexion_db->prepare($query);

    //Tomo datos del formulario
    $user=htmlentities(addslashes($_POST["user"]));
    $pass=htmlentities(addslashes($_POST["pass"]));
 
    //Doy valores a los marcadores
    $resultado->bindValue(":user",$user);
    $resultado->bindValue(":pass",$pass);

    //Ejecuto consulta
    $resultado->execute();

    //Verifico si hubo coincidencia
    $verifiacion = $resultado->rowCount();

    if($verifiacion != 0){

        echo "<hr> Usuario encontrado<h2>";

    }else{

        //Redirigir a pagina de login
        header("location:login.php");
    }

	$resultado->closeCursor();							

}catch(Exception $ex){

    die("Error: " . $ex->getMessage());

}
