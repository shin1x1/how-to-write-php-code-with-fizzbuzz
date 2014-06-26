<?php
namespace Sample4;

/**
 * Class HtmlRenderer
 */
class HtmlRenderer implements Renderable
{
    /**
     * @param string $output
     */
    public function render($output)
    {
        echo sprintf("<li>%s</li>\n", $output);
    }
}
