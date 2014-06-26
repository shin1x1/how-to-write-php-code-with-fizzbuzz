<?php
namespace Sample1;

/**
 * Class FizzBuzzRunnerTest
 * @package Sample1
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
