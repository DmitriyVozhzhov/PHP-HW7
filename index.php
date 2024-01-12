<?php

declare(strict_types=1);

// створюємо масив із випадкових чисел

function randArray(int $length, int $min = 1, int $max = 50): array
{
    $array = [];

    for ($i = 0; $i < $length; $i++) {
        $array[] = rand($min, $max);
    }

    return $array;
}

// 1 знаходимо найбільший та найменший елементи масиву
$array = randArray(20);
var_dump($array);

$minEl = min($array);
$maxEl = max($array);

echo "Найменший елемент масиву: $minEl" . PHP_EOL;
echo "Найбільший елемент масиву: $maxEl" . PHP_EOL;

// сортуємо масив та виводимо його у відсортованому вигляді

//sort($array);
//echo "Відсортований масив: ";
//var_dump($array);

rsort($array);
echo "Відсортований масив в зворотньому порядку: ";
var_dump($array);
