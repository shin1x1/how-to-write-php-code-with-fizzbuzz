<?php
require_once __DIR__ . '/fizzbuzz_function.php';

$inputs = array_filter(range(1, 20), function($i) { return $i % 2 !== 0; });

foreach ($inputs as $i) {
    echo get_fizzbuzz($i) . PHP_EOL;
}
