<?php

namespace Deg540\StringCalculatorPHP;

class StringCalculator
{
    public function add(string $numbers): int{
        if($numbers == ""){return 0;}
        return array_sum(str_split($numbers));
    }
}