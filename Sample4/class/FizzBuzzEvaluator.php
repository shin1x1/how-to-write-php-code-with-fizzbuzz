<?php
namespace Sample4;

/**
 * Class FizzBuzzEvaluator
 */
class FizzBuzzEvaluator implements Evaluable
{
    /**
     * @param integer $i
     * @return string
     */
    public function evaluate($i)
    {
        if ($i % 3 === 0 && $i % 5 === 0) {
            return 'FizzBuzz';
        } else if ($i % 3 === 0) {
            return 'Fizz';
        } else if ($i % 5 === 0) {
            return 'Buzz';
        } else {
            return $i;
        }
    }
}
