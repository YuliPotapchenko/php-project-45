<?php

namespace src\Game;

use function src\Game\getRandNum;
use function src\Game\getRandOperationForCalc;
use function src\Engine\runGames;

use const src\Engine\ROUNDS_COUNT;

const RULES_CALC = 'What is the result of the expression?';

function runBrainCalcGame()
{
    $getQuestionAndAnswer = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $randomNum1 = getRandNum();
        $randomNum2 = getRandNum();
        $operation = getRandOperationForCalc();
        $rightAnswer = eval('return ' . $randomNum1 . $operation . $randomNum2 . ';');
        $getQuestionAndAnswer[$i] = ["{$randomNum1} {$operation} {$randomNum2}", $rightAnswer];
    }
    runGames($getQuestionAndAnswer, RULES_CALC);
}
