<?php

namespace Deg540\CleanCodeKata9;


use Deg540\CleanCodeKata9\Example;
class FizzBuzz
{
    /**
     * @param $value
     *
     * @return bool
     */
    function isFizz(int $value): bool {
        return $value%3==0;
    }

    /**
     * @param $value
     *
     * @return bool
     */
    function isBuzz(int $value): bool {
        return $value%5==0;
    }

    /**
     * @param $value
     *
     * @return bool
     */
    function isFizzBuzz(int $value): bool {
        return $value%15==0;
    }

    /**
     * @param $value
     *
     * @return string
     */
    function game($value): string {
        if (Example::integerChecker($value) == false){
            return "NaN";
        }

        if ($this->isFizzBuzz($value)){
            return "FizzBuzz";
        }

        if ($this->isFizz($value)){
            return "Fizz";
        }

        if ($this->isBuzz($value)){
            return "Buzz";
        }

        return "$value";
    }
}