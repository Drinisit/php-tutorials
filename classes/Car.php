<?php

    class Car{

        //Properties
        private $brand;
        private $color;

        //Constructor
        public function __construct($brand, $color = "none"){
            $this->brand = $brand;
            $this->color = $color;
        }

        //how to access property inside private property
        function getCarInfo(){
            return "Brand: " . $this->brand . ", Color: " . $this->color;
        }

        //GETTER and SETTER
        public function getColor(){
            return  $this->color;
        }
        public function setColor($color){
            $this->color = $color;
        }
    
    }

    // $car01 = new Car("Volvo", "Black");
    // echo $car01->getCarInfo();