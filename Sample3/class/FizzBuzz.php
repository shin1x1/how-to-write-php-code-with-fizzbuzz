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
    public function execute()
    {
        foreach ($this->inputs as $i) {
            $output = $this->evaluate($i);
            $this->render($output);
        }
    }

    /**
     * @param string $output
     */
    public function render($output)
    {
        echo $output . PHP_EOL;
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
