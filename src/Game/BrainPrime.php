<?php

namespace src\Game;

use function cli\line;
use function cli\prompt;
use function src\Engine\getRandNum;
use function src\Engine\primeCheck;
use function src\Engine\runGames;

const RULES = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function runBrainPrimeGame()
{
    $getQuestionAndAnswer = function () {
        $randomNum = getRandNum();
        line("Question: $randomNum");
        $answer = prompt('Your answer');
        $rightAnswer = primeCheck($randomNum);
        return [$answer, $rightAnswer];
    };

    runGames($getQuestionAndAnswer, RULES);
}
