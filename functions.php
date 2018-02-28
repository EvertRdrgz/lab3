<?php
//ARRAYS
function displayCards() {

    $deck = range(0,51);  //creates array with values 1 to 52
    
    $suits = array("clubs","spades","hearts","diamonds");
    
    foreach ($deck as $card) {
        
        echo "Card value: "  . (($card % 13) + 1) . "-  Card Suite: " .  $suits[floor($card / 13)] . " <br />";
        
    }

}


//OBJECT
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

//STRING
function displayCards(){
    
    $deck = array();
    $suits = array("clubs","spades","hearts","diamonds");
    
    for ($i = 0; $i < 4; $i++) {
        for ($j = 1; $j <= 13; $j++) {
            $deck[] = $suits[$i] . "_" . $j;
        }
    }
    
    foreach ($deck as $card) {
        echo $card . "<br />";
    }

}

//ELAPSED TIME
$start = microtime(true);

for ($i = 0; $i < 1000000; $i++) {
    $j = rand(1,3000) * rand(1,2000);
}

function displayElapsedTime() {
    global $start;
    
    $elapsedSecs = microtime(true) - $start;
    echo $elapsedSecs . " secs";
}
?>