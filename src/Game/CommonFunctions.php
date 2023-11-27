<?php

namespace src\Game;

function isPrime(int $number): string
{
    if ($number == 1) {
        return 0;
    }
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            return "no";
        }
    }
    return 'yes';
}

function nod(int $a, int $b): mixed
{
    if ($a % $b != 0) {
        return nod($b, $a % $b);
    }
    return abs($b);
}

function getRandNum(): int
{
    return random_int(1, 100);
}

function getRandOperationForCalc(): string
{
    $operationNum = random_int(1, 3);
    $operation = '';
    switch ($operationNum) {
        case 1:
            $operation = "+";
            break;
        case 2:
            $operation = "-";
            break;
        case 3:
            $operation = "*";
    }
    return $operation;
}
