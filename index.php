<?php
	//Varaible for holding time
    $startTime  = microtime(true);
	//Start session
    session_start(); //start or resume a session
	//Check if there is a session
    if (!isset($_SESSION['gameCount'])) { 
        $_SESSION['gameCount'] = 1;
        $_SESSION['finalTime'] = 0;
    }
    // Returns an array of cards per player
    function retrieveHand(&$cards){
         // Stores the hand of cards for player in an array
        $playerHand = array();
        $playerScore = 0;
        // Drawing another card if haven’t reached score
        while($playerScore<=36){
            $drawCard = rand(1,13);
            $drawSuit = rand(0,3);
            while($cards[13*$drawSuit + $drawCard] == 1){
                $drawCard = rand(1,13);
                $drawSuit = rand(0,3);
            }
        
            $cards[13*$drawSuit + $drawCard] = 1;
            switch ($drawSuit) {
                case 0: $drawSuit = "spades";
                    break;
                case 1: $drawSuit = "diamonds";
                    break;
                case 2: $drawSuit = "clubs";
                    break;
                case 3: $drawSuit = "hearts";
                    break;
            }
            $playerHand[] = $drawSuit;
            $playerHand[] = $drawCard;
            $playerScore = $playerScore + $drawCard;
            $i++;
        }
        $playerHand[]=$playerScore;
        return $playerHand;
    }
    
    function retreivePlayer($character, $total) {
        echo "<h3>$character[$count]</h3>";
        echo "<img id='players' src=img/players/$character[$total].png>";
        return $character;
    }
    
    // Displays the array of cards per player along with the sum of points
    function showPlayerCards($playerHand){
        for($i=0; $i<count($playerHand); $i++) {
            $temp=$i+1;
            echo "<img id='playerHand' src=img/cards/$playerHand[$i]/$playerHand[$temp].png>";
            $i++;
       }   
    }
    
        //Displays the Total / AVG Time for Games Played
    function displayTime(){
        global $timeStart;
         $timeInSeconds = microtime(true) - $timeStart;
         echo "This Game Took: " . $timeInSeconds . " in seconds (MicroTime) <br /><br/>";
         echo "Total Matches:"  . $_SESSION['gameCount'] . "<br />";
         $_SESSION['finalTime'] += $timeInSeconds;
         echo "Total Time for All Matches: " .  $_SESSION['finalTime'] . "<br /><br />";
         echo "Average Time Per Game: " . ( $_SESSION['finalTime']  / $_SESSION['gameCount']);
         $_SESSION['gameCount']++; 
    } 

    // Play game function
    function startSilverJack() {
        $players = array("player0", "player1", "player3", "player4");           
        $cards = array();
        for($i=0; $i<52; $i++){
            $cards[] = 0;
        }
        shuffle($characters);
        $count = 0;
    for($i=0;$i<4;$i++){
            $player[$i] = array();
            $playerScore = array();
            $player[$i] = retrievePlayer($player, $count);
            $player[$i] = retrieveCards($cards);
            displayCards($player[$i]);
	$playerScore[$i] = $playerHand[$i][count($playerHand[$i])-1];
	$playerScore[$i] = $playerScore[$i];
            $i++;
        }        
        displayTime();
        }
?>



<!DOCTYPE html>
<html>
    <style type="text/css" href ="css/style.css" rel ="styles">
    body, div  {
           background-image:url("img/background.jpg");
        }
        h1 {
            text-align: center;
            color: white;
            font-size: 4em;
            background-color: black;
        }
        
        h2 {
            text-align: center;
            padding: 250px;
            color: white;
            display: inline;
            font-size: 2em;
        }
    
    </style>
    <head>
        <title>Lab #3: SilverJack Card Game </title>
    </head>
    
     <h1 style="color:powderblue;"> World Series of Poker</h1>
     <h2 style="color:powderblue;"> Player:</h2>
     <h2 style="color:powderblue;"> Cards:</h2>
     <h2 style="color:powderblue;"> Score:</h2>
     
    <div>
  
      
    </div>
    
    <body>

    </body>
    
</html>