<?php 

$movements = [];
$possibleMovement = ["Down", "Right", "Left", "Up"];

$amount = rand (5, 7);

for ($i=0; $i < $amount ; $i++) { 
    $possibleMovementPosition = rand (0, 3);
    $movements[$i] = $possibleMovement[$possibleMovementPosition];
}


echo '[' . implode(', ', $movements) . ']';

?>


