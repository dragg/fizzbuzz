<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /** @test */
    public function it_return_passed_number_if_number_do_not_divided_to_3_or_5(): void
    {
        $this->assertSame(2, get_fizz_buzz_value(2));
    }

    /**
     * @dataProvider getNumberDividedTo3Provider
     * @test
     */
    public function it_return_Fizz_on_number_divided_to_3(int $numberDividedTo3): void
    {
        $this->assertSame('Fizz', get_fizz_buzz_value($numberDividedTo3));
    }

    public function getNumberDividedTo3Provider(): array
    {
        return [
            [3],
            [33],
            [69],
            [21],
        ];
    }

    /** @test */
    public function it_return_Buzz_on_number_divided_to_5(): void
    {
        $this->assertSame('Buzz', get_fizz_buzz_value(5));
    }

    /** @test */
    public function it_return_FizzBuzz_on_number_divided_to_3_and_5(): void
    {
        $this->assertSame('FizzBuzz', get_fizz_buzz_value(15));
    }
}
