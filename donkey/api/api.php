<?php
    $first_string = array("Уебищный", "Тупорылый", "Говняный", "Клоунский", "Уродский");
    $second_string = array("долбоебский", "пидорковатый", "вонючий", "хуесосный", "шлюхский");
    $third_string = array("уебок", "пидорас", "хуесос", "долбоеб", "мудак");

    $first_result = $first_string[array_rand($first_string)];
    $second_result = $second_string[array_rand($second_string)];
    $third_result = $third_string[array_rand($third_string)];

    $result_string = $first_result . " " . $second_result . " " . $third_result;

    echo $result_string;