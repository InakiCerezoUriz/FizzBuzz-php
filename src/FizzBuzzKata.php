<?php

namespace Deg540\CleanCodeKata9;

class FizzBuzzKata
{
    private CONST FIZZ_NUMBER = 3;
    private CONST BUZZ_NUMBER = 5;
    public function convert($number): ?string
    {
        if ($this->isFizzBuzz($number))
            return 'FizzBuzz';
        if ($this->isFizz($number))
            return 'Fizz';
        if ($this->isBuzz($number))
            return 'Buzz';
        return $number;
    }
    public function isFizzBuzz($number): bool
    {
        return $this->isFizz($number) && $this->isBuzz($number);
    }
    private function isFizz($number): bool
    {
        return $number % self::FIZZ_NUMBER === 0;
    }
    public function isBuzz($number): bool
    {
        return $number % self::BUZZ_NUMBER === 0;
    }

}