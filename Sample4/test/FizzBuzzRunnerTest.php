<?php
namespace Sample4;

/**
 * Class FizzBuzzRunnerTest
 * @package Sample4
 */
class FizzBuzzRunnerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function runner()
    {
        $this->expectOutputString(EXPECTED_FIZZBUZZ_OUTPUT);
        include __DIR__ . '/../fizzbuzz.php';
    }
}
