<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Sample4\FizzBuzz;
use Sample4\FizzBuzzEvaluator;
use Sample4\EchoRenderer;

$inputs = range(1, 20);
$evaluator = new FizzBuzzEvaluator();
$renderer = new EchoRenderer();

$fizzbuzz = new FizzBuzz($inputs, $evaluator, $renderer);
$fizzbuzz->publish();
