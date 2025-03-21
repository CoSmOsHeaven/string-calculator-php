<?php

declare(strict_types=1);

namespace Deg540\StringCalculatorPHP\Test;

use Deg540\StringCalculatorPHP\StringCalculator;
use PHPUnit\Framework\TestCase;

final class StringCalculatorTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->stringCalculator = new StringCalculator();
    }

    /**
     * @test
     */
    public function givenEmptyStringReturns0()
    {
        $this->assertEquals(0, $this->stringCalculator->add(""));
    }

    /**
     * @test
     */
    public function givenSingleNumberReturnsNumber()
    {
        $this->assertEquals(1, $this->stringCalculator->add("1"));
    }

    /**
     * @test
     */
    public function givenTwoNumbersReturnsSumOfNumbers()
    {
        $this->assertEquals(3, $this->stringCalculator->add("1,2"));
    }

    /**
     * @test
     */
    public function givenThreeNumbersReturnsSum()
    {
        $this->assertEquals(6, $this->stringCalculator->add("1,2,3"));
    }

    /**
     * @test
     */
    public function givenStringWithNewLineReturnsSum() :void
    {
        $this->assertEquals(6, $this->stringCalculator->add("1\n2,3"));
    }
}