<?php
namespace Sample2;

/**
 * Class FizzBuzzRunnerTest
 * @package Sample2
 */
class FizzBuzzRunnerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function evaluate()
    {
        $this->expectOutputString(EXPECTED_FIZZBUZZ_OUTPUT);
        include __DIR__ . '/../fizzbuzz.php';
    }
}
