<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use swkberlin\Kata;

class KataTest extends TestCase
{
    public function testNotFailing(): void
    {
        $this->assertTrue(true);
    }

    public function testAnyNumberShouldReturnIfself():void
    {
        $expected_number = 1;
        $kata = new Kata(1);
        $this->assertTrue($kata->getResult() === $expected_number);
        $expected_number = 2;
        $kata = new Kata(2);
        $this->assertTrue($kata->getResult() === $expected_number);

    }

    public function testShouldReturnFizzIfDivisibleByThree():void
    {
        $expected_result = "Fizz";
        $kata = new Kata(33);
        $this->assertTrue($kata->getResult() == $expected_result);
    }
    public function testShouldReturnBuzzIfDivisibleByFive():void
    {
        $expected_result = "Buzz";
        $kata = new Kata(10);
        $this->assertTrue($kata->getResult() == $expected_result);
    }
    public function testShouldReturnFizzBuzzIfDivisibleByFiveAndThree():void
    {
        $expected_result = "FizzBuzz";
        $kata = new Kata(120);
        $this->assertTrue($kata->getResult() == $expected_result);
    }
}
