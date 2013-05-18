<?php
/**
 * lib.php
 * Function library for palindromes script
 * @author: Matt License (matt@mattlicense.co.uk)
 * @date: 18 May 2013
 */

/**
 * Function to determine whether an integer is a palindrome
 * @param $int
 * @return bool
 * @throws InvalidArgumentException
 */
function is_palindrome($int)
{
    if(!is_int($int)) throw new InvalidArgumentException($int." is not an integer");

    $num = $int;
    $reverse = 0;

    while($num > 0) {
        $remainder = $num%10;
        $reverse = $reverse*10 + $remainder;
        $num = ($num-$remainder)/10;
    }

    return $reverse == $int;
}

/**
 * Function to generate the Sieve of Eratosthenes up to a limit ($int)
 * @param $int
 * @return array
 */
function eratosthenes($int)
{
    $sieve = array();
    $p = 2;

    for($i = 2; $i <= $int; $i++) $sieve[] = $i; // fill an array from 2..$int

    while($p < max($sieve)) {
        $count = count($sieve);
        for($i = 0; $i < $count; $i++) {
            if(($sieve[$i] != $p) && ($sieve[$i] % $p == 0)) unset($sieve[$i]);
        }

        // shift the array index
        $sieve = array_values($sieve);

        // increment $p to the next integer in the array
        for($j = 0; $j < count($sieve); $j++) {
            if($p < $sieve[$j]) {
                $p = $sieve[$j];
                break;
            }
        }
    }

    return $sieve;
}