<?php
namespace Task2;

/**
 * Class to find the sum of the even-valued terms.
 */
class Fibonacci
{
    private $number = 4000000;

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
        $sum = 2;
        $prev1 = 5;
        $prev2 = 3;
        while ($prev1 <= $this->getNumber()) {
            $tempSum = $prev1 + $prev2;
            if ($tempSum % 2 === 0) {
                $sum += $tempSum;
            }
            $prev2 = $prev1;
            $prev1 = $tempSum;
        }

        return $sum;
    }
}

$solution = new Fibonacci();
echo $solution->solution();
