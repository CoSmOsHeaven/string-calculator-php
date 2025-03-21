<?php

declare(strict_types=1);

namespace Deg540\StringCalculatorPHP\Test;

use Deg540\StringCalculatorPHP\StringCalculator;
use PHPUnit\Framework\TestCase;

final class StringCalculatorTest extends TestCase
{
    protected function setUp(): void
    {
        $this->stringCalculator = new StringCalculator();
        parent::setUp();
    }

    /**
     * @test
     */
    public function givenEmptyStringReturns0()
    {
        $result = $this->stringCalculator->add("");

        $this->assertEquals(0, $result);
    }

    /**
     * @test
     */
    public function givenSingleNumberReturnsNumber()
    {
        $result = $this->stringCalculator->add("1");

        $this->assertEquals(1, $result);
    }

    /**
     * @test
     */
    public function givenTwoNumbersReturnsSum()
    {
        $result = $this->stringCalculator->add("1,2");

        $this->assertEquals(3, $result);
    }

}