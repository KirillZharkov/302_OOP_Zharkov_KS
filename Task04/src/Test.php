<?php

use App\Stack;

function runTest()
{

    echo PHP_EOL .  "TEST1 (To String test)" . PHP_EOL;
    $stack1 = new Stack(1, 2, 3);
    $correct = '3->2->1';
    echo 'Ожидается: ' . $correct . PHP_EOL;
    echo 'Получено: ' . $stack1 . PHP_EOL;
    if ($stack1 == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }

    echo PHP_EOL .  "TEST2 (Constructor test)" . PHP_EOL;
    $stack1 = new Stack(4, 5, 6);
    $correct = '6->5->4';
    echo 'Ожидается: ' . $correct . PHP_EOL;
    echo 'Получено: ' . $stack1 . PHP_EOL;
    if ($stack1 == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }

    echo PHP_EOL .  "TEST3 (push test)" . PHP_EOL;
    $stack1->push(123, 22);
    $correct = '22->123->6->5->4';
    echo 'Ожидается: ' . $correct . PHP_EOL;
    echo 'Получено: ' . $stack1 . PHP_EOL;
    if ($stack1 == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }

    echo PHP_EOL .  "TEST4 (pop test)" . PHP_EOL;
    $element = $stack1->pop();
    $correct = '22';
    echo 'Ожидается: ' . $correct . PHP_EOL;
    echo 'Получено: ' . $element . PHP_EOL;
    if ($element == $correct) {
        echo 'stack1: ' . PHP_EOL . $stack1 . PHP_EOL;
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }

    echo PHP_EOL .  "TEST5 (top test)" . PHP_EOL;
    $element = $stack1->top();
    $correct = '123';
    echo 'Ожидается: '  . $correct . PHP_EOL;
    echo 'Получено: ' . $element . PHP_EOL;
    if ($element == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }

    echo PHP_EOL .  "TEST6 (To String test)" . PHP_EOL;
    $answerd = checkIfBalanced('(ab[cd{}])');
    $correct = true;
    if ($answerd == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }
}