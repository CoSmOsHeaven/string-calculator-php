<?php

namespace Deg540\StringCalculatorPHP;

class StringCalculator
{
    public function add(string $numbers): int{
        return array_sum(str_split($numbers));
    }
}