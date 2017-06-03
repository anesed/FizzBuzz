<?php
use \PHPUnit\Framework\TestCase;
use \anesed\fizzbuzz\FizzBuzzNumberConverter;

class FizzBuzzConverterTest extends TestCase {
    private $converter;
    
    protected function setUp() {
        $this->converter = new FizzBuzzNumberConverter();
    }
    
    public function testMultipleOfFive() {
        $this->assertEquals($this->converter->convert(5), "IT");
    }
    
    public function testMultipleOfThree() {
        $this->assertEquals($this->converter->convert(3), "Linio");
    }
    
    public function testMultipleOfBothThreeAndFive() {
        $this->assertEquals($this->converter->convert(15), "Linianos");
    }
    
    public function testMultipleOfNeitherThreeOrFive() {
        $this->assertEquals($this->converter->convert(7), "7");
    }
    
}
