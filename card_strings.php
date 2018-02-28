<?php

function displayCards(){
    
    $deck = array();
    $suits = array("clubs","spades","hearts","diamonds");
    
    for ($i = 0; $i < 4; $i++) {
        for ($j = 1; $j <= 13; $j++) {
            $deck[] = $suits[$i] . "_" . $j;
        }
    }
    
    shuffle($deck);
    
    foreach ($deck as $card) {
        echo $card . "<br />";
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