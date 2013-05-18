<?php
/**
 * palindrome.php
 * A PHP script to count the number of palindromes (e.g. 12321, 44644) up to a set number, and print all prime palindroms
 * @author: Matt License (matt@mattlicense.co.uk)
 * @date: 18 May 2013
 */

// for easy reference
$limit = (int)($argv[1]);

include "lib.php";

$start = microtime(true);

// variables to count/store palindromes
$palindromes = 0; $results = array();

if((int)($limit) <= 10) die("There are no palindromes under 10\n");

$sieve = eratosthenes($limit);

// iterate through to the limit
for($i = 10; $i <= $limit; $i++) {
    if(is_palindrome($i)) {
        $palindromes++;

        if(in_array($i, $sieve)) $results[] = $i;
    }
}

$count = count($results);

print "There are ".$palindromes." palindromes between 1 and ".$limit.
      ", of which the following ".$count." are also prime:\n";

$ret = '';
for($i = 0; $i < $count; $i++) {
    $ret .= $results[$i].", ";
}

$end = microtime(true);
$time = $end - $start;

print trim($ret, ", ").PHP_EOL;
print "Script took ".$time." seconds using " . memory_get_usage()/1024 . "kb of memory at peak".PHP_EOL.PHP_EOL;