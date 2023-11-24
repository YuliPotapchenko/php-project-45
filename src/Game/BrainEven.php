<?php

namespace src\Game;

use const src\Engine\ROUNDS_COUNT;
use function cli\line;
use function cli\prompt;
use function src\Engine\getRandNum;
use function src\Engine\runGames;

const RULES_EVEN = 'Answer "yes" if the number is even, otherwise answer "no".';

function runBrainEvenGame()
{
    $getQuestionAndAnswer = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $randomNum = getRandNum();
        $rightAnswer = ($randomNum % 2 == 0) ? 'yes' : "no";
        $getQuestionAndAnswer[$i] = [$randomNum, $rightAnswer];
    }

    runGames($getQuestionAndAnswer, RULES_EVEN);
}
