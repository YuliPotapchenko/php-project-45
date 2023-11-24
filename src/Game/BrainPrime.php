<?php

namespace src\Game;

use function cli\line;
use function cli\prompt;
use function src\GameLogic\getRandNum;
use function src\GameLogic\primeCheck;

function run_BrainPrime_logic(): array
{
    $randomNum = getRandNum();
    line("Question: $randomNum");
    $answer = prompt('Your answer');
    $rightAnswer = primeCheck($randomNum);
    return [$answer, $rightAnswer];
}
