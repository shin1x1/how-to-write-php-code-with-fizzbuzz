<?php
namespace Sample4;

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
     * @var Evaluable
     */
    protected $evelutor;
    /**
     * @var Renderable
     */
    protected $renderer;

    /**
     * @param integer $start
     * @param integer $end
     * @param Evaluable $evaluator
     * @param Renderable $renderer
     */
    public function __construct($start, $end, Evaluable $evaluator, Renderable $renderer)
    {
        $this->start = $start;
        $this->end = $end;
        $this->evaluator = $evaluator;
        $this->renderer = $renderer;
    }

    /**
     *
     */
    public function render()
    {
        for ($i = $this->start; $i <= $this->end; $i++) {
            $value = $this->evaluator->evaluate($i);
            $this->renderer->render($value);
        }
    }
}
