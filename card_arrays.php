<?php


function displayCards() {

    $deck = range(0,51);  //creates array with values 1 to 52
    
    $suits = array("clubs","spades","hearts","diamonds");
    
    shuffle($deck);
    
    foreach ($deck as $card) {
        
        echo "Card value: "  . (($card % 13) + 1) . "-  Card Suite: " .  $suits[floor($card / 13)] . " <br />";
        
    }

}


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