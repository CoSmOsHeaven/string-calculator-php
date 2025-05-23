<?php

namespace Deg540\StringCalculatorPHP;

class StringCalculator
{
    public function add(string $numbers) : int{
        $numbers = str_replace("\n", ',', $numbers);

        if(str_contains($numbers, ',')) {
            return array_sum(explode(',', $numbers));
        }

        if(empty($numbers)) {
            return 0;
        }

        return (int) $numbers;
    }
}