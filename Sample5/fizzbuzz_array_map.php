<?php
require_once __DIR__ . '/fizzbuzz_function.php';

$inputs = range(1, 20);

foreach (array_map('get_fizzbuzz', $inputs) as $output) {
    echo $output . PHP_EOL;
}
