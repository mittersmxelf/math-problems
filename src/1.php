<?php
// Generate a random math problem
$numbers = array(1, 2, 3, 4, 5);
shuffle($numbers);
echo $numbers[0] . " + " . $numbers[1] . " - " . $numbers[2] . " x " . $numbers[3] . " / " . $numbers[4];
?>