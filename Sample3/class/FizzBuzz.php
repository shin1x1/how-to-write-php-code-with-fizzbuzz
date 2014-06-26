<?php
namespace Sample3;

/**
 * Class FizzBuzz
 */
class FizzBuzz
{
    /**
     * @var array
     */
    protected $inputs;

    /**
     *
     */
    public function __construct(array $inputs)
    {
        $this->inputs = $inputs;
    }

    /**
     *
     */
    public function render()
    {
        foreach ($this->inputs as $v) {
            echo $this->evaluate($v) . PHP_EOL;
        }
    }

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
