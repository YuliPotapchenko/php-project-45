<?php

namespace src\Game;

use function cli\line;
use function cli\prompt;
use function src\GameLogic\getRandNum;
use function src\GameLogic\primeCheck;

function run_BrainPrime_logic(): array
{
    $random_num = getRandNum();
    line("Question: $random_num");
    $answer = prompt('Your answer');
    $right_answer = primeCheck($random_num);
    return [$answer, $right_answer];
}