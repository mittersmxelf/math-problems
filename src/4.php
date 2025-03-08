<?php

$num1 = rand(1, 10);
$num2 = rand(1, 10);
$answer = $num1 + $num2;
echo "What is $num1 + $num2?";
$result = trim(fgets(STDIN));
if ($result == $answer) {
    echo "Correct!";
} else {
    echo "Incorrect. The answer is $answer.";
}