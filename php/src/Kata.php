<?php

declare(strict_types=1);

namespace swkberlin;

class Kata
{
    private $number;
    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public function getResult()
    {
        if($this->number % 3  == 0 && $this->number % 5 == 0){
            return "FizzBuzz";
        }

        if($this->number % 3 == 0){
            return "Fizz";
        }
        if ($this->number % 5 == 0){
            return "Buzz";
        }

        return $this->number;
    }
}
