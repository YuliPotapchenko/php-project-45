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
            for ($i = 0; $i < 3; $i++) {
                [$answer, $right_answer] = BrainEven();
                if ($answer != $right_answer) {
                    line("'$answer' is wrong answer ;(. Correct answer was '$right_answer'.");
                    line("Let's try again, $name!");
                    exit;
                }
                line('Correct!');
            }
            break;
        case 'BrainCalc':
            line('What is the result of the expression?');
            for ($i = 0; $i < 3; $i++) {
                [$answer, $right_answer] = BrainCalc();
                if ($answer != $right_answer) {
                    line("'$answer' is wrong answer ;(. Correct answer was '$right_answer'.");
                    line("Let's try again, $name!");
                    exit;
                }
                line('Correct!');
            }
            break;
        case 'BrainGcd':
            line('Find the greatest common divisor of given numbers.');
            for ($i = 0; $i < 3; $i++) {
                [$answer, $right_answer] = BrainGcd();
                if ($answer != $right_answer) {
                    line("'$answer' is wrong answer ;(. Correct answer was '$right_answer'.");
                    line("Let's try again, $name!");
                    exit;
                }
                line('Correct!');
            }
            break;
    }
    line("Congratulations, $name!");
}

function BrainEven()
{
    $random_num = getRandNum();
    line("Question: $random_num");
    $answer = prompt('Your answer');
    $right_answer = ($random_num % 2 == 0) ? 'yes' : "no";
    return [$answer, $right_answer];
}

function BrainCalc()
{
    $random_num1 = getRandNum();
    $random_num2 = getRandNum();
    $operation = getRandOperationForCalc();
    line("Question: $random_num1 $operation $random_num2");
    $answer = prompt('Your answer');
    $right_answer = eval('return ' . $random_num1 . $operation . $random_num2 . ';');
    return [$answer, $right_answer];
}

function BrainGcd()
{
    $random_num1 = getRandNum();
    $random_num2 = getRandNum();
    line("Question: $random_num1 $random_num2");
    $answer = prompt('Your answer');
    $right_answer = nod($random_num1,$random_num2);
    return [$answer, $right_answer];
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

