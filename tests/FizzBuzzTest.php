<?php

declare(strict_types=1);

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\FizzBuzz;
use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{

    /**
     * @test
     */
    public function numberIsMultipleOfThree()
    {
        $fizzbuzz = new FizzBuzz();

        $isFizz = $fizzbuzz->isFizz(6);

        $this->assertTrue($isFizz);
    }
    /**
     * @test
     */
    public function numberIsNotMultipleOfThree()
    {
        $fizzbuzz = new FizzBuzz();

        $isFizz = $fizzbuzz->isFizz(1);

        $this->assertFalse($isFizz);
    }

    /**
     * @test
     */
    public function numberIsMultipleOfFive()
    {
        $fizzbuzz = new FizzBuzz();

        $isBuzz = $fizzbuzz->isBuzz(10);

        $this->assertTrue($isBuzz);
    }

    /**
     * @test
     */
    public function numberIsNotMultipleOfFive()
    {
        $fizzbuzz = new FizzBuzz();

        $isBuzz = $fizzbuzz->isBuzz(1);

        $this->assertFalse($isBuzz);
    }

    /**
     * @test
     */
    public function numberIsMultipleOfFifteen()
    {
        $fizzbuzz = new FizzBuzz();

        $isFizzBuzz = $fizzbuzz->isFizzBuzz(30);

        $this->assertTrue($isFizzBuzz);
    }

    /**
     * @test
     */
    public function numberIsNotMultipleOfFifteen()
    {
        $fizzbuzz = new FizzBuzz();

        $isFizzBuzz = $fizzbuzz->isFizzBuzz(1);

        $this->assertFalse($isFizzBuzz);
    }

    /**
     * @test
     */
    public function FizzBuzzGameNoInteger()
    {
        $fizzbuzz = new FizzBuzz();

        $gameNumber = $fizzbuzz->game("1");

        $this->assertEquals($gameNumber,"NaN");
    }

    /**
     * @test
     */
    public function FizzBuzzGameIsInteger()
    {
        $fizzbuzz = new FizzBuzz();

        $gameNumber = $fizzbuzz->game(1);

        $this->assertEquals($gameNumber,"1");
    }

    /**
     * @test
     */
    public function FizzBuzzGameIsFizz()
    {
        $fizzbuzz = new FizzBuzz();

        $gameNumber = $fizzbuzz->game(3);

        $this->assertEquals($gameNumber,"Fizz");
    }

    /**
     * @test
     */
    public function FizzBuzzGameIsBuzz()
    {
        $fizzbuzz = new FizzBuzz();

        $gameNumber = $fizzbuzz->game(5);

        $this->assertEquals($gameNumber,"Buzz");
    }

    /**
     * @test
     */
    public function FizzBuzzGameIsFizzBuzz()
    {
        $fizzbuzz = new FizzBuzz();

        $gameNumber = $fizzbuzz->game(15);

        $this->assertEquals($gameNumber,"FizzBuzz");
    }


}
