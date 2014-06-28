<?php
namespace Sample3;

/**
 * Class FizzBuzz
 */
class FizzBuzz
{
    /**
     * @var integer
     */
    protected $start;
    /**
     * @var integer
     */
    protected $end;

    /**
     * @param integer $start
     * @param integer $end
     */
    public function __construct($start, $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    /**
     *
     */
    public function publish()
    {
        for ($i = $this->start ; $i <= $this->end ; $i++) {
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
