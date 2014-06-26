<?php
require_once __DIR__ . '/fizzbuzz_function.php';

$inputs = range(1, 20);

foreach ($inputs as $i) {
    echo get_fizzbuzz($i) . PHP_EOL;
}
