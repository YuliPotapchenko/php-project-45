<?php

namespace src\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function runGames(array $questionsAndAnswers, string $rules)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, $name!");
    line($rules);
    foreach ($questionsAndAnswers as $result) {
        [$gameTask, $correctAnswer] = $result;
        line("Question: {$gameTask}");
        $playerAnswer = prompt("Your answer");
        if ((string) $playerAnswer === (string) $correctAnswer) {
            line("Correct!");
        } else {
            line("'{$playerAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$name}!");
            exit;
        }
    }
    line("Congratulations, $name!");
}
