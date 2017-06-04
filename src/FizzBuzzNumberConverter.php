<?php
namespace anesed\fizzbuzz;

class FizzBuzzNumberConverter {
    const MULTIPLICITY_NONE = 0;
    const MULTIPLICITY_THREE = 1;
    const MULTIPLICITY_FIVE = 2;
    const MULTIPLICITY_BOTH = 3;    
    
    private $conversionMethods;
    
    public function __construct(string $messageMultipleOfThree, 
            string $messageMultipleOfFive, 
            string $messageMultipleOfBoth) {
        $this->conversionMethods = [
            self::MULTIPLICITY_NONE => function($number) {
                return (string)$number;
            },
            self::MULTIPLICITY_THREE => function($number) use ($messageMultipleOfThree) {
                return $messageMultipleOfThree;
            },
            self::MULTIPLICITY_FIVE => function($number) use ($messageMultipleOfFive) {
                return $messageMultipleOfFive;
            },
            self::MULTIPLICITY_BOTH => function($number) use ($messageMultipleOfBoth) {
                return $messageMultipleOfBoth;
            }
        ];
    }
    
    public function convert(int $number) : string {
        $multiplicity = $this->getMultiplicity($number);
        $conversionMethod = $this->conversionMethods[$multiplicity];
        return $conversionMethod($number);
    }
    
    private function getMultiplicity(int $number) : int {
        $multipleOfFive = $this->getMultiplicityBit($number, 5) * 2;
        $multipleOfThree = $this->getMultiplicityBit($number, 3);
        return $multipleOfFive + $multipleOfThree;
    }
    
    private function getMultiplicityBit(int $number, int $bit) : int {
        return max(0, 1 - abs($number % $bit));
    }
    
}
