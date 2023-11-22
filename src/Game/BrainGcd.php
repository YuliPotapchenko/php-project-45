<?php

namespace src\Game;

use function cli\line;
use function cli\prompt;
use function src\GameLogic\getRandNum;
use function src\GameLogic\nod;

function run_BrainGcd_logic(): array
{
    $random_num1 = getRandNum();
    $random_num2 = getRandNum();
    line("Question: $random_num1 $random_num2");
    $answer = prompt('Your answer');
    $right_answer = nod($random_num1,$random_num2);
    return [$answer, $right_answer];
}
