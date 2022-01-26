<?php

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase{

    function testGiven1WhenFizzBuzzThenReturn1(){
        $this->assertEquals(1, FizzBuzz::execute(1));
    }

    function testGiven3ThenReturnFizz() {
        $this->assertEquals("Fizz", FizzBuzz::execute(3));
    }

    function testGiven5thenReturnBuzz() {
        $this->assertEquals("Buzz", FizzBuzz::execute(5));
    }
    function testGiven15thenReturnFizzBuzz() {
        $this->assertEquals("FizzBuzz", FizzBuzz::execute(15));
    }
}