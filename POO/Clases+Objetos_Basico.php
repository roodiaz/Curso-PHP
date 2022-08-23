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

    class Coche
    {

        public $puertas;
        public $color;
        public $marca;

        //Constructor
        function __construct()
        {
            $this->puertas = 2;
            $this->color = "Blanco";
            $this->marca = "Audi";
        }

        //Metodos
        function Frenar(){
            echo "Estoy frenando";
        }

        function Acelerar(){
            echo "Estoy acelerando";
        }

        //Getters y setters
        function GetColor()
        {
            return $this->color;
        }

        function SetColor($color)
        {
            $this->color = $color;
        }
    }

    //creacion de objeto
    $auto = new Coche();

    //tomar propiedades de objeto
    echo "$auto->puertas <br>";
    echo "$auto->color <br>";
    echo "$auto->marca <br>";

    //llamar metodos de objeto
    echo $auto->Frenar() . "<br>";
    echo $auto->Acelerar() . "<br>";

    //getters y setter
    echo $auto->GetColor() . "<br>";
    $auto->SetColor("Negro");
    echo $auto->GetColor() . "<br>";

    ?>
</body>

</html>