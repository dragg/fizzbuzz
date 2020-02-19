<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FizzBuzzController extends Controller
{
    public function __invoke()
    {
        $numbers = [];

        for ($i = 1; $i <= 100; $i++) {
            $numbers[] = get_fizz_buzz_value($i);
        }

        return view('fizzbuzz', compact('numbers'));
    }
}
