<?php

namespace src\Game;

use function cli\line;
use function cli\prompt;
use function src\Engine\getRandNum;
use function src\Engine\getRandOperationForCalc;
use function src\Engine\runGames;

const RULES = 'What is the result of the expression?';

function runBrainCalcGame()
{
    $getQuestionAndAnswer = function () {
        $randomNum1 = getRandNum();
        $randomNum2 = getRandNum();
        $operation = getRandOperationForCalc();
        line("Question: $randomNum1 $operation $randomNum2");
        $answer = prompt('Your answer');
        $rightAnswer = eval('return ' . $randomNum1 . $operation . $randomNum2 . ';');
        return [$answer, $rightAnswer];
    };

    runGames($getQuestionAndAnswer, RULES);
}
