<?php

namespace App;

class FizzBuzz {
    public function forNumber(int $num)
    {
        // if ($num % 3 === 0 && $num % 5 === 0){
        //     return "FizzBuzz";
        // }
        // else if ($num % 3 === 0){
        //     return "Fizz";
        // }
        // else if ($num % 5 === 0){
        //     return "Buzz";
        // }
        // else {
        //     return "$num";
        // }
        
        $output = "";
        if ($num % 3 === 0) {$output .= "Fizz";}
        if ($num % 5 === 0) {$output .= "Buzz";}
        if ($num % 7 === 0) {$output .= "Rarr";}
        return $output ? $output : "$num";  
    }
}
