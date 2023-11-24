<?php

namespace src\Game;

use function cli\line;
use function cli\prompt;
use function src\Engine\getRandNum;
use function src\Engine\runGames;
use function src\Engine\nod;
use const src\Engine\ROUNDS_COUNT;

const RULES_GCD = 'Find the greatest common divisor of given numbers.';

function runBrainGcdGame()
{
    $getQuestionAndAnswer = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $randomNum1 = getRandNum();
        $randomNum2 = getRandNum();
        $rightAnswer = nod($randomNum1, $randomNum2);
        $getQuestionAndAnswer[$i] = ["{$randomNum1} {$randomNum2}", $rightAnswer];
    }
    runGames($getQuestionAndAnswer, RULES_GCD);
}
