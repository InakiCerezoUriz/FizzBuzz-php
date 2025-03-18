<?php
declare(strict_types=1);

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\FizzBuzzKata;
use PHPUnit\Framework\TestCase;

final class FizzBuzzKataTest extends TestCase
{
    private FizzBuzzKata $fizzBuzz;
    protected function setUp() :void
    {
        parent::setUp();
        $this->fizzBuzz = new FizzBuzzKata();
    }

    /**
     * @test
     */
    public function givenMultipleOfFizzNumberAndBuzzNumberReturnsFizzBuzz()
    {
        $result = $this->fizzBuzz->convert(30);

        $this->assertEquals("FizzBuzz", $result);
    }
    /**
     * @test
     */
    public function multipleOfFizzNumberReturnsFizz(): void
    {
        $result = $this->fizzBuzz->convert(6);

        $this->assertEquals('Fizz', $result);
    }

    /**
     * @test
     */
    public function multipleOfBuzzNumberReturnsBuzz()
    {
        $result = $this->fizzBuzz->convert(10);

        $this->assertEquals("Buzz", $result);
    }

    /**
     * @test
     */
    public function notMultipleOfFizzNumberOrBuzzNumberReturnsNumber(): void
    {
        $result = $this->fizzBuzz->convert(1);

        $this->assertEquals(1, $result);
    }


}

