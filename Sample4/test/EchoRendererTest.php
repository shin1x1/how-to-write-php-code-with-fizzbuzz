<?php
namespace Sample4;

/**
 * Class EchoEvaluatorTest
 * @package Sample4
 */
class EchoEvaluatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var EchoRenderer
     */
    protected $sut;

    /**
     *
     */
    public function setUp()
    {
        $this->sut = new EchoRenderer();
    }

    /**
     * @test
     */
    public function render()
    {
        $this->expectOutputString("1\n");
        $this->sut->render('1');
    }
}
