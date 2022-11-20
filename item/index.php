<?php
    class item {
        public $name;
        public $price;
        public $stock;
        public $sold;

        public function __construct($name, $price, $stock) {
            $this -> name = $name;
            $this -> price = $price;
            $this -> stock = $stock;
            $this -> sold = 0;
        }
  
    public function logDetails() {
        echo $this -> name ." prices is ". $this -> price.", stock is ". $this -> stock." Sold by ". $this -> sold. "<br>";
    }
    public function buy() {
        if ($this -> stock > 0) {
            echo "Buying ". $this -> name ."<br>";
            $this -> stock = $this -> stock - 1;
            $this -> sold = $this -> sold + 1;
        } else {
            echo "Out of stock <br>";
        }
    }
    public function return() {
        if ($this -> sold > 0) {
            echo "Returning ". $this -> name ."<br>";
            $this -> stock = $this -> stock + 1;
            $this -> sold = $this -> sold - 1;
        } else {
            echo "Your item is not available in return <br>";
        }
    }
}
    $sugar = new item("Sugar", 20, 100);
    $coffee = new item("Coffee", 15, 5);
    $noodles = new item("Noodles", 10, 10);

    echo "Have the first instance <br>";
    $sugar -> logDetails();
    $sugar -> buy();
    $sugar -> buy();
    $sugar -> buy();
    $sugar -> return();
    $sugar -> logDetails()."<br>";

    echo "<br> Have the second instance <br>";
    $coffee -> logDetails();
    $coffee -> buy();
    $coffee -> buy();
    $coffee -> return();
    $coffee -> return();
    $coffee -> logDetails();

    echo "<br> Have the third instance <br>";
    $noodles -> logDetails();
    $noodles -> return();
    $noodles -> return();
    $noodles -> return();
    $noodles -> logDetails();
    
?>