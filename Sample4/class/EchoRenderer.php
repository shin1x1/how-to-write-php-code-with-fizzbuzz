<?php
namespace Sample4;

/**
 * Class EchoRenderer
 */
class EchoRenderer implements Renderable
{
    /**
     * @param string $output
     */
    public function render($output)
    {
        echo $output . PHP_EOL;
    }
}
