<?php

require("Coche.php");

//agregar palabras extendes + clase a heredar
class Camion extends Coche{
    
//Constructor
function __construct()
{
    $this->puertas = 2;
    $this->color = "Blanco";
    $this->marca = "Mercedes Benz";
    $this->ruedas= 8;
}
    
//Sobreescritura de metodos
function Frenar(){
    echo "Estoy frenando el camion";
}

//reutilizar metodo de clase padre sin sobreescribir
function Acelerar(){
    parent::Acelerar();
    echo "el camion";
}
}
