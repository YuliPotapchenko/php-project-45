<?php

namespace src\Game;

use function cli\line;
use function cli\prompt;
use function src\Engine\getRandNum;
use function src\Engine\nod;

const RULES = 'Find the greatest common divisor of given numbers.';

function runBrainGcdGame()
{
    $getQuestionAndAnswer = function () {
        $randomNum1 = getRandNum();
        $randomNum2 = getRandNum();
        line("Question: $randomNum1 $randomNum2");
        $answer = prompt('Your answer');
        $rightAnswer = nod($randomNum1, $randomNum2);
        return [$answer, $rightAnswer];
    };

    runGames($getQuestionAndAnswer, RULES);
}
