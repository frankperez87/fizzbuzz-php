<?php

namespace Acme;

/**
 * Class FizzBuzz
 * @package Acme
 */
class FizzBuzz
{

    /**
     * @param $number
     * @return string
     */
    public function execute($number)
    {
        if($number % 15 == 0) return 'fizzbuzz';
        if($number % 3 == 0) return 'fizz';
        if($number % 5 == 0) return 'buzz';
        return $number;
    }

    /**
     * @param $number
     * @return array
     */
    public function executeUpTo($number)
    {
        return array_map(function ($i) {
            return $this->execute($i);
        }, range(1, $number));
    }
}
