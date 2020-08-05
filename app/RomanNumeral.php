<?php
// example of TDD from notes
namespace App;

class RomanNumeral{
    // values we want to check
    private $dictionary = [
        30 => "XXX",
        20 => "XX",
        10 => "X",
        9 => "IX",
        5 => "V",
        4 => "IV",
    ];

    public function forNumber(int $number) : string
    {
        // keep track of result
        $result = "";

        foreach ($this->dictionary as $value => $numeral) { 
            // change the if to a while
            // will repeat on a number until it
            // gets lower than it
            while ($number >= $value) { 
                $result .= $numeral; 
                $number -= $value;
            }
        }
        // add I on as many times as necessary
        return $result . str_repeat("I", $number);    
    }
}
