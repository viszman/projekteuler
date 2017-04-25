<?php
namespace Task1;

/**
 * Class to find the sum of all the multiples of 3 or 5 below 1000.
 */
class Multiples
{
    private $number;

    function __construct(int $number)
    {
        $this->number = $number;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber(int $number)
    {
        $this->number = $number;
    }

    public function solution() : int
    {
        $sum = 0;

        //sum 3
        for ($i=3; $i < $this->getNumber(); $i=$i+3) {
            $sum += $i;
        }

        //sum 5
        for ($i=5; $i < $this->getNumber(); $i=$i+5) {
            $sum = $sum + $i;
        }

        return $sum;
    }
}

$solution = new Multiples(1000);
echo $solution->solution();
