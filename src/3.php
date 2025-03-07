<?php

$number1 = rand(0, 10);
$number2 = rand(0, 10);
$operation = array("+", "-", "*", "/");
$random_op = $operation[array_rand($operation)];

if ($random_op == "+") {
    echo "What is " . $number1 . " + " . $number2 . "?";
} else if ($random_op == "-") {
    echo "What is " . $number1 . " - " . $number2 . "?";
} else if ($random_op == "*") {
    echo "What is " . $number1 . " x " . $number2 . "?";
} else if ($random_op == "/") {
    echo "What is " . $number1 . " / " . $number2 . "?";
}
