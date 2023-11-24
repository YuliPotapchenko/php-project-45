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
        for ($i = 0; $i < 10; $i++) {
            if ($i == $randomProgressionPosNum - 1) {
                $progressLine[] = '..';
            } else {
                $progressLine[] = $randomNum + $randomProgressorVal * $i;
            }
        }
        $progressLine = implode(' ', $progressLine);
        $rightAnswer = $randomNum + $randomProgressorVal * ($randomProgressionPosNum - 1);
        $getQuestionAndAnswer["{$progressLine}"] = $rightAnswer;
    }
    runGames($getQuestionAndAnswer, RULES_PROGRESSION);
}
