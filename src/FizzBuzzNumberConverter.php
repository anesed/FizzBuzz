<?php
namespace anesed\fizzbuzz;

class FizzBuzzNumberConverter {
    
    public function convert(int $number) : string {
        $fizzBuzzValue = sprintf("%d", $number);
        if ($number % 5 == 0 && $number % 3 == 0) {
            $fizzBuzzValue = "Linianos";
        } else if ($number % 5 == 0) {
            $fizzBuzzValue = "IT";
        } else if ($number % 3 == 0) {
            $fizzBuzzValue = "Linio";
        }
        return $fizzBuzzValue;
    }
    
}
