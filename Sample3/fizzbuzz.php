<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Sample3\FizzBuzz;

$inputs = range(1, 20);

$fizzbuzz = new FizzBuzz($inputs);
$fizzbuzz->execute();
