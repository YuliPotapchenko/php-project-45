<?php

namespace src\Game;

use function cli\line;
use function cli\prompt;
use function src\Engine\getRandNum;

const RULES = 'What number is missing in the progression?';

function runBrainProgressionGame()
{
    $getQuestionAndAnswer = function () {
        $randomNum = getRandNum();
        $randomProgressionPosNum = random_int(1, 10);
        $randomProgressorVal = random_int(1, 10);
        $progressLine = [];
        for ($i = 0; $i < 10; $i++) {
            if ($i == $randomProgressionPosNum - 1) {
                $progressLine[] = '..';
            } else {
                $progressLine[] = $randomNum + $randomProgressorVal * $i;
            }
        }
        $progressLine = implode(' ', $progressLine);
        line("Question: $progressLine");
        $answer = prompt('Your answer');
        $rightAnswer = $randomNum + $randomProgressorVal * ($randomProgressionPosNum - 1);
        return [$answer, $rightAnswer];
    };

    runGames($getQuestionAndAnswer, RULES);
}
