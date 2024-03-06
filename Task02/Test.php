<?php
function runTest() 
{
    //String representation test
    $fraction1 = new Zharkov\Task02\Fraction(4, 8);
    $correct = "1/2";
    echo "Ожидается: $correct" . PHP_EOL;
    echo "Получено: $fraction1" . PHP_EOL;
    if ($fraction1 == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }
   
    $fraction3 = new Zharkov\Task02\Fraction(-9, 3);
    $correct = "-3'";
    echo "Ожидается: $correct" . PHP_EOL;
    echo "Получено: $fraction3" . PHP_EOL;
    if ($fraction3 == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }

    //Adding test
    $fraction1 = new Zharkov\Task02\Fraction(4, 8);
    $fraction2 = new Zharkov\Task02\Fraction(1, 4);
    $fraction3 = $fraction1->add($fraction2);
    $correct = "3/4";
    echo "Ожидается: $correct" . PHP_EOL;
    echo "Получено: " . $fraction3 . PHP_EOL;
    if ($fraction3 == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }

    $fraction1 = new Zharkov\Task02\Fraction(4, 7);
    $fraction2 = new Zharkov\Task02\Fraction(-1, 5);
    $fraction3 = $fraction1->add($fraction2);
    $correct = "13/35";
    echo "Ожидается: $correct" . PHP_EOL;
    echo "Получено: " . $fraction3 . PHP_EOL;
    if ($fraction3 == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }

    // Subtraction test
    $fraction1 = new Zharkov\Task02\Fraction(10, 5);
    $fraction2 = new Zharkov\Task02\Fraction(2, 3);
    $fraction3 = $fraction1->sub($fraction2);
    $correct = "1'1/3";
    echo "Ожидается: $correct" . PHP_EOL;
    echo "Получено: " . $fraction3 . PHP_EOL;
    if ($fraction3 == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }
    
    $fraction1 = new Zharkov\Task02\Fraction(-5, 2);
    $fraction2 = new Zharkov\Task02\Fraction(1, 4);
    $fraction3 = $fraction1->sub($fraction2);
    $correct = "-2'3/4";
    echo "Ожидается: $correct" . PHP_EOL;
    echo "Получено: " . $fraction3 . PHP_EOL;
    if ($fraction3 == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }
}