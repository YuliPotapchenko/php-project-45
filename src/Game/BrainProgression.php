<?php

namespace src\Game;

use function cli\line;
use function cli\prompt;
use function src\Engine\getRandNum;
use function src\Engine\runGames;
use const src\Engine\ROUNDS_COUNT;

const RULES_PROGRESSION = 'What number is missing in the progression?';

function runBrainProgressionGame()
{
    $getQuestionAndAnswer = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $randomNum = getRandNum();
        $randomProgressionPosNum = random_int(1, 10);
        $randomProgressorVal = random_int(1, 10);
        $progressLine = [];
        for ($j = 0; $j < 10; $j++) {
            if ($j == $randomProgressionPosNum - 1) {
                $progressLine[] = '..';
            } else {
                $progressLine[] = $randomNum + $randomProgressorVal * $j;
            }
        }
        $progressLine = implode(' ', $progressLine);
        $rightAnswer = $randomNum + $randomProgressorVal * ($randomProgressionPosNum - 1);
        $getQuestionAndAnswer[$i] = [$progressLine, $rightAnswer];
    }
    runGames($getQuestionAndAnswer, RULES_PROGRESSION);
}
