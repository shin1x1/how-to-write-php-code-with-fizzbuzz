<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Sample3\FizzBuzz;

$fizzbuzz = new FizzBuzz(1, 20);
$fizzbuzz->publish();
