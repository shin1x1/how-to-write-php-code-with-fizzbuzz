<?php
namespace Sample4;

/**
 * Class FizzBuzzEvaluatorTest
 * @package Sample4
 */
class FizzBuzzEvaluatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var FizzBuzzEvaluator
     */
    protected $sut;

    /**
     *
     */
    public function setUp()
    {
        $this->sut = new FizzBuzzEvaluator();
    }

    /**
     * @dataProvider provider
     * @test
     */
    public function evaluate($no, $fizzbuzz)
    {
        $this->assertEquals($fizzbuzz, $this->sut->evaluate($no));
    }

    /**
     * dataProvider
     */
    public function provider()
    {
        return [
            [1, '1'],
            [3, 'Fizz'],
            [5, 'Buzz'],
            [15, 'FizzBuzz'],
            [100, 'Buzz'],
        ];
    }
}
