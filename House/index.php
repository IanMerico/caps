<?php
    class House
    {
        public $location;
        public $price;
        public $lot;
        public $type;
        public $discount;
        public $totalPrice;

        public function  show_all()
        {
            echo "Location: ".''. $this->location .'<br>'.
                 "Price: ".''. $this->price .'<br>'.
                 "Lot: ".''. $this->lot .'<br>'.
                 "Type: ".''. $this->type .'<br>'.
                 "Discount: ".''. $this->discount .'<br>'.
                 "Total Price: ".''. $this->totalPrice .'<br><br>';     
        }
        public function _set($location, $price, $lot, $type )
        {
            $this->location = $location;   
            $this->price = $price;  
            $this->lot = $lot; 
            $this->type = $type; 
            $this->discount = 0; 
            $this->totalPrice = 0;

            if($this -> type == "Pre-selling") {
                $this -> discount =  (20 / 100);
                $this -> totalPrice =  $price - ($price * $this -> discount) ;
            }else{
                $this -> discount =  (5 / 100);
                $this -> totalPrice =  $price - ($price * $this -> discount) ;
            }
        }
    }
    
    $House1 = new House();
    $House2 = new House();
    $House3 = new House();
    $House4 = new House();
    $House5 = new House();

    $House1 ->_set("La Union", 1500000, "100sqm", "Pre-selling");
    $House2 ->_set("Metro Manila", 1000000, "150sqm", "Ready for Occupancy");
    $House3 ->_set("Bulacan", 2000000, "175sqm", "Pre-selling");
    $House4 ->_set("Cavite", 800000, "60sqm", "Ready for Occupancy");
    $House5 ->_set("Bataan", 1800000, "160sqm", "Pre-selling");

    $House1 ->show_all();
    $House2 ->show_all();
    $House3 ->show_all();
    $House4 ->show_all();
    $House5 ->show_all();
    
?>