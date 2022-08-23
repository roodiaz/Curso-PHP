<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    require("Coche.php");
    require("Camion.php");

    $coche = new Coche();
    $camion = new Camion();

    echo $coche->Acelerar()();
    echo $camion->Acelerar()();

    ?>
</body>

</html>