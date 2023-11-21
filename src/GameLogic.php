<?php

namespace src\GameLogic;

use function src\Cli\greeting;
use function cli\line;
use function cli\prompt;

/**
 * @return void
 */
function runGames(string $game_name)
{
    $name = greeting();
    switch ($game_name) {
        case 'BrainEven':
            line('Answer "yes" if the number is even, otherwise answer "no".');
            break;
        case 'BrainCalc':
            line('What is the result of the expression?');
            break;
        case 'BrainGcd':
            line('Find the greatest common divisor of given numbers.');
            break;
        case 'BrainProgression':
            line('What number is missing in the progression?');
            break;
        case 'BrainPrime':
            line('Answer "yes" if given number is prime. Otherwise answer "no".');
            break;
    }
    $game_logic = 'src\Game\run_' . $game_name . '_logic';

    for ($i = 0; $i < 3; $i++) {
        [$answer, $right_answer] = eval('return ' . $game_logic . '();');
        if ($answer != $right_answer) {
            line("'$answer' is wrong answer ;(. Correct answer was '$right_answer'.");
            line("Let's try again, $name!");
            exit;
        }
        line('Correct!');
    }
    line("Congratulations, $name!");
}

function primeCheck($number){
    if ($number == 1)
        return 0;
    for ($i = 2; $i <= $number/2; $i++){
        if ($number % $i == 0)
            return "no";
    }
    return 'yes';
}

function nod($a, $b)
{
    if ($a % $b != 0) {
        return nod($b, $a % $b);
    } else {
        return abs($b);
    }
}

function getRandNum(): int
{
    return random_int(1, 100);
}

function getRandOperationForCalc(): string
{
    $operation_num = random_int(1, 3);
    $operation = '';
    switch ($operation_num) {
        case 1:
            $operation = "+";
            break;
        case 2:
            $operation = "-";
            break;
        case 3:
            $operation = "*";
    }
    return $operation;
}

