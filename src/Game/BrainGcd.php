<?php

namespace src\Game;

use function cli\line;
use function cli\prompt;
use function src\GameLogic\getRandNum;
use function src\GameLogic\nod;

function run_BrainGcd_logic(): array
{
    $randomNum1 = getRandNum();
    $randomNum2 = getRandNum();
    line("Question: $randomNum1 $randomNum2");
    $answer = prompt('Your answer');
    $rightAnswer = nod($randomNum1, $randomNum2);
    return [$answer, $rightAnswer];
}
