<?php

class Card {
   public $cardValue;
   public $cardFace;
}

function displayCards() {

    $suits = array("clubs","spades","hearts","diamonds");
    
    $deck = array();
    
    for ($i=0; $i<=3; $i++) {
        for ($j=1; $j<=13; $j++) {
            $card = new Card;
            $card->cardSuit = $suits[$i];
            $card->cardValue = $j;
            $deck[] = $card;
        }
    }
    
    foreach ($deck as $card) {
        
        echo $card->cardValue . "  " . $card->cardSuit . "<br />";
        
    }
    
}//endFunction

?>
<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        
        <?=displayCards()?>

    </body>
</html>