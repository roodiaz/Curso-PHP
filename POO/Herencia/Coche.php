<?php

class Coche
    {
        public $puertas;
        public $color;
        public $marca;
        public $ruedas;

        //Constructor
        function __construct()
        {
            $this->puertas = 2;
            $this->color = "Blanco";
            $this->marca = "Audi";
            $this->ruedas= 4;
        }

        //Metodos
        function Frenar(){
            echo "Estoy frenando";
        }

        function Acelerar(){
            echo "Estoy acelerando";
        }

        //Getters y setters
        function GetPuertas()
        {
            return $this->puertas;
        }

        function SetPuertas($puertas)
        {
            $this->puertas = $puertas;
        }

        function GetMarca()
        {
            return $this->marca;
        }

        function SetMarca($marca)
        {
            $this->marca = $marca;
        }
        
        function GetColor()
        {
            return $this->color;
        }

        function SetColor($color)
        {
            $this->color = $color;
        }

        function GetRuedas()
        {
            return $this->ruedas;
        }

        function SetRuedas($ruedas)
        {
            $this->ruedas = $ruedas;
        }
    }
