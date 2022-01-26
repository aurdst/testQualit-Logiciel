<?php

class FizzBuzz{

    static function execute( int $value){
        $valueReturn = null;
        if($value%3 == 0) {
            $valueReturn = "Fizz";
        } 
        if($value%5 == 0){
            $valueReturn = "Buzz";
        }
        if($value%15 == 0){
            $valueReturn = "FizzBuzz";
        }

        if($valueReturn !== null ){
            return $valueReturn;
        }else{
            return $value;
        }
    }
}


?>