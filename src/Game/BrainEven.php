<?php

namespace src\Game;

use function cli\line;
use function cli\prompt;
use function src\Engine\getRandNum;

function runBrainEvenGame(): array
{
    $randomNum = getRandNum();
    line("Question: $randomNum");
    $answer = prompt('Your answer');
    $rightAnswer = ($randomNum % 2 == 0) ? 'yes' : "no";
    return [$answer, $rightAnswer];
}
