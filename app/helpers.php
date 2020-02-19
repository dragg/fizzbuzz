<?php

function get_fizz_buzz_value($number)
{
    $replace = '';

    if ($number % 3 === 0) {
        $replace .= 'Fizz';
    }

    if ($number % 5 === 0) {
        $replace .= 'Buzz';
    }

    return $replace ?: $number;
}
