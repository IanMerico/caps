<?php
    $cards = array(
        "King"  => 13,
        "Queen" => 12,
        "Jack"  => 11,
        "Ace"   => 1
    );
    function pairing($cards){
        echo "List of keys in the array";
        echo '<ul>';
        foreach($cards as $keys => $card_list) {
            echo "<li> $keys </li>"; 
        }
        echo '</ul>';
        foreach($cards as $keys => $card_list) {
            echo "The value of $keys in Pyramid Solitaire is $card_list.<br>"; 
        }
    }
    pairing($cards);
?>