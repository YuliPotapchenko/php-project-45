<?php

namespace src\Game;

use function cli\line;
use function cli\prompt;
use function src\GameLogic\getRandNum;

function run_BrainEven_logic(): array
{
    $random_num = getRandNum();
    line("Question: $random_num");
    $answer = prompt('Your answer');
    $right_answer = ($random_num % 2 == 0) ? 'yes' : "no";
    return [$answer, $right_answer];
}
