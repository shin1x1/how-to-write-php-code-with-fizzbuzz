<?php
namespace Sample4;

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
     * @var Evaluable
     */
    protected $evelutor;
    /**
     * @var Renderable
     */
    protected $renderer;

    /**
     * @param array $inputs
     * @param Evaluable $evaluator
     * @param Renderable $renderer
     */
    public function __construct(array $inputs, Evaluable $evaluator, Renderable $renderer)
    {
        $this->inputs = $inputs;
        $this->evaluator = $evaluator;
        $this->renderer = $renderer;
    }

    /**
     *
     */
    public function publish()
    {
        foreach ($this->inputs as $i) {
            $value = $this->evaluator->evaluate($i);
            $this->renderer->render($value);
        }
    }
}
