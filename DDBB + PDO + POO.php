Para el archivo de config.php:
<?php

//se deifinen constantes
    define('DB_HOST', 'localhost:3308'); //puerto 3308, si no lo pongo parece que no funciona
    define('DB_USUARIO','root');
    define('DB_CONTRA', '');
    define('DB_NOMBRE', 'pruebas');
    define('DB_CHARSET', 'uft8');
?>

Archivo de conexion.php:
<?php

    require('configuracion.php');

    class Conexion
    {
        protected $conexion_db;

        public function __construct() //constructor
        {
			
			try{
				
				$this->conexion_db=new PDO('mysql:host=DB_HOST;dbname=DB_NOMBRE;DB_USUARIO;DB_CONTRA');
				$this->conexion_db->setAtributte(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->conexion_db->exec("SET CHARACTER SET utf8");
				
				return $this->conexion_db;
				
			}catch(Exception $e){
				
				echo "Fallo al conectar a MySQL: " . $e->getLine();
				
                return;			
			}
        }
    }
?>

Archivo de devuelve productos.php:
<?php

    require('conexion.php');

	//para heredar se usa extends
    class devuelveProductos extends conexion 
    {
        public function __construct() //constructor versión moderna php 7.0 en adelante

		//este es el constructor del archivo conexion.php
		//el parent:: es similar al base de c#
		parent::__construct();
		
        }

        public function getProductos()
        {
			$query="SELECT * FROM PRODUCTOS";
			$sentencia=$this->conexion_db->prepare($query);
			$sentencia->execute(array());
			$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
			
			$sentencia->closeCursor();
			$this->conexion_db = null;
			
			return $resultado;
			
            // $resultado=$this->conexion_db->query("SELECT * FROM PRODUCTOS");

            // $productos=$resultado->fetch_all(MYSQLI_ASSOC);
            // return $productos;
        }
    }
?>

Y finalmente el archivo index que yo decidí llamar muestraProductos.php:
<?php

    require "devuelveProductos.php";

    $productos = new devuelveProductos();

    $arrayProductos = $productos->getProductos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        foreach($arrayProductos as $elemento)
        {
			//var_dump muestra los datos de manera interesante
            var_dump($elemento);
        }
    ?>
</body>
</html>
