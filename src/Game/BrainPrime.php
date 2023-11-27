<?php

namespace src\Game;

use function src\Game\getRandNum;
use function src\Game\isPrime;
use function src\Engine\runGames;

use const src\Engine\ROUNDS_COUNT;

const RULES_PRIME = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function runBrainPrimeGame()
{
    $getQuestionAndAnswer = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $randomNum = getRandNum();
        $rightAnswer = isPrime($randomNum);
        $getQuestionAndAnswer[$i] = [$randomNum, $rightAnswer];
    }
    runGames($getQuestionAndAnswer, RULES_PRIME);
}
