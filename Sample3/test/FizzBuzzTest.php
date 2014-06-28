<?php
namespace Sample3;

/**
 * Class FizzBuzzTest
 * @package Sample3
 */
class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var FizzBuzz
     */
    protected $sut;

    /**
     *
     */
    public function setUp()
    {
        $this->sut = new FizzBuzz(1, 20);
    }

    /**
     * @test
     */
    public function render()
    {
        $this->expectOutputString(EXPECTED_FIZZBUZZ_OUTPUT);
        $this->sut->publish();
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
