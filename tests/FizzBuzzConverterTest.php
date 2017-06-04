<?php
use \PHPUnit\Framework\TestCase;
use \anesed\fizzbuzz\FizzBuzzNumberConverter;

class FizzBuzzConverterTest extends TestCase {
    private $converter;
    
    private $messageThree = "Linio";
    private $messageFive = "IT";
    private $messageBoth = "Linianos";
    
    protected function setUp() {
        $this->converter = new FizzBuzzNumberConverter($this->messageThree, 
                $this->messageFive, 
                $this->messageBoth);
    }
    
    public function testFive() {
        $this->assertEquals($this->converter->convert(5), $this->messageFive);
    }
    
    public function testLargerMultipleOfFive() {
        $this->assertEquals($this->converter->convert(50000), $this->messageFive);
    }
    
    public function testThree() {
        $this->assertEquals($this->converter->convert(3), $this->messageThree);
    }
    
    public function testLargerMultipleOfThree() {
        $this->assertEquals($this->converter->convert(60003), $this->messageThree);
    }
    
    public function testThreeTimesFive() {
        $this->assertEquals($this->converter->convert(15), $this->messageBoth);
    }
    
    public function testLargerMultipleOfBoth() {
        $this->assertEquals($this->converter->convert(50115), $this->messageBoth);
    }
    
    public function testMultipleOfNeitherThreeOrFive() {
        $this->assertEquals($this->converter->convert(8), "8");
    }
    
    public function testLargerMultipleOfNeitherThreeOrFive() {
        $this->assertEquals($this->converter->convert(50972), "50972");
    }
    
    public function testPrime() {
        $this->assertEquals($this->converter->convert(7), "7");
    }
    
    public function testLargerPrime() {
        $this->assertEquals($this->converter->convert(50971), "50971");
    }
    
}
