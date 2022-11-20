<?php
    class character {

        public $health = 100;
        public $stamina = 100;
        public $manna = 100;
        public $name;

        public function walk() {
            $this -> stamina = $this -> stamina - 1;
            return $this;
        }
        public function run() {
            $this -> stamina = $this -> stamina - 3;
            return $this;
        }
        public function showStats($name) {
            $this -> name = $name;

            echo $this -> name ."<br>";
            echo "Health: ".$this -> health."<br>";
            echo "Stamina: ".$this -> stamina."<br>";
            echo "Manna: ".$this -> manna."<br><br>";
        }    
    }
    class Shaman extends character {
        public $health = 150;
        public function heal(){
            $this -> health = $this -> health + 5;
            $this -> stamina = $this -> stamina + 5;
            $this -> manna = $this -> manna + 5;
            return $this;
        }
    }
    class Swordsman extends character {
        public $health = 170;
        public function slash(){
            $this -> manna = $this -> manna - 10;
            return $this;
        }
    }
    $player1 = new character();
    $Shaman = new Shaman();
    $Swordsman = new Swordsman();

    $player1 -> walk() -> walk() -> walk() -> run() -> run() -> showStats("New Player");
    $Shaman -> walk() -> walk() -> walk() -> run() -> run() -> heal() -> showStats("Shaman");
    $Swordsman -> walk() -> walk() -> walk() -> run() -> run() -> slash() -> slash() -> showStats("I am powerful! Swordsman");

    // Now for the first instance of Character (instance called 'character '), 
    // try calling a method 'heal' or 'slash' and make sure it doesn't work. :)
    // $player1 -> heal() -> slash();
?>
