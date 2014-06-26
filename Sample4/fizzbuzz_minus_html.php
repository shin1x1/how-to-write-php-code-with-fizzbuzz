<?php
require_once __DIR__ . '/vendor/autoload.php';

use Sample4\FizzBuzz;
use Sample4\FizzBuzzEvaluator;
use Sample4\HtmlRenderer;

$evaluator = new FizzBuzzEvaluator();
$renderer = new HtmlRenderer();

$fizzbuzz = new FizzBuzz(1, 20, $evaluator, $renderer);
$fizzbuzz->render();
