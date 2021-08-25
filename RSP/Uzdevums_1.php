<?php
$choise=['rock',
    'paper',
    'scissors'];

    echo "Rock, Paper, Scissors".PHP_EOL;
$playersInput=readline("Input your choise: ");

function computerRandom(array $choise)
{
    return$choise[array_rand($choise)];
}

$computer = computerRandom($choise);


function compare_choices($playersInput, $computer){

    if ($playersInput == $computer) {
       echo "its a draw:".PHP_EOL;
    } elseif ($playersInput == "rock" && $computer == "scissors"||$playersInput == "scissors" && $computer == "paper"||$playersInput== "paper" && $computer== "rock") {
        echo "Human player winn".PHP_EOL;
    } else {
       echo "Computer wins".PHP_EOL;
    }

}


echo compare_choices($computer,$playersInput);