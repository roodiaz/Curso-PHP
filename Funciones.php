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

    $num1 = 5;

    //por valor
    function IncrementaPorValor($num1)
    {
        return $num1++;
    }

    echo "Por valor: <br>";
    echo "Funcion: " . IncrementaPorValor($num1) . "<br> Variable: $num1 <br><br>";

    //por referencia
    function IncrementaPorReferencia(&$num1)
    {
        return $num1++;
    }

    echo "Por referencia: <br>";
    echo "Funcion: " . IncrementaPorReferencia($num1) . "<br> Variable: $num1";

    ?>
</body>

</html>