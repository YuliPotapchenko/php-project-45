<?php

namespace src\Game;

use function cli\line;
use function cli\prompt;
use function src\Engine\getRandNum;
use function src\Engine\runGames;

const RULES = 'Answer "yes" if the number is even, otherwise answer "no".';

function runBrainEvenGame()
{
    $getQuestionAndAnswer = function () {
        $randomNum = getRandNum();
        line("Question: $randomNum");
        $answer = prompt('Your answer');
        $rightAnswer = ($randomNum % 2 == 0) ? 'yes' : "no";
        return [$answer, $rightAnswer];
    };

    runGames($getQuestionAndAnswer, RULES);
}
