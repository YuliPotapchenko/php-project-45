<?php

namespace src\Game;

use function cli\line;
use function cli\prompt;
use function src\GameLogic\getRandNum;
use function src\GameLogic\getRandOperationForCalc;

function run_BrainCalc_logic(): array
{
    $random_num1 = getRandNum();
    $random_num2 = getRandNum();
    $operation = getRandOperationForCalc();
    line("Question: $random_num1 $operation $random_num2");
    $answer = prompt('Your answer');
    $right_answer = eval('return ' . $random_num1 . $operation . $random_num2 . ';');
    return [$answer, $right_answer];
}
