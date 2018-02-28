<?php
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

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        
        <?= displayElapsedTime() ?>

    </body>
</html>