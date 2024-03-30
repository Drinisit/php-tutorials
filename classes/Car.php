<?php

    class Car{

        //Properties
        private $brand;
        private $color; 
        public $vehicleType = "car"; 

        //Constructor
        public function __construct($brand, $color = "none"){
            $this->brand = $brand;
            $this->color = $color;
        }
    }

    $car01 = new Car("Volvo", "Black");
    echo $car01->vehicleType;
    $car02 = new Car("BMW");
    $car03 = new Car("Honda", "White");
