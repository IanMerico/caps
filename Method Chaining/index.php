<?php
    class Bike {

        public $distance_km = 0;

        function drive() {
            $this -> distance_km = $this -> distance_km + 1;
            return $this; 
        }
        function  reverse() {
            $this -> distance_km = $this -> distance_km - 1;
            return $this;
        }
        function displayInfo() {
            echo "Distance kilometer: ".$this -> distance_km;
            return $this;
        }
    }

    $bike1 = new Bike();
    $bike1 ->drive()->drive()->drive()->reverse()->displayInfo();
?>