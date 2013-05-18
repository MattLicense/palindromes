# Palindromes.php

A small command line script to count all palindromes up to a limit, and provide a list of all prime palindromes to that limit.

This was set as a coding challenge, the aim was to iterate to 100,000, count all palindromes and list all prime palindromes.

Initially I thought of using [Fermat's little theorem](http://en.wikipedia.org/wiki/Fermat%27s_little_theorem), but due to the limitations of computer-based calculations, it was unsuitable for large numbers (32-bit would only be able to calculate up to 2^32)

## Usage

> $ php palindrome.php 1000

This will return:

> There are 99 palindromes between 1 and 1000, of which the following 16 are also prime:

> 11, 101, 131, 151, 181, 191, 313, 353, 373, 383, 727, 757, 787, 797, 919, 929

> Script took *x* seconds using *y* kb of memory