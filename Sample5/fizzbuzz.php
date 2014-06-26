<?php
require_once __DIR__ . '/fizzbuzz_function.php';

for ($i = 1; $i <= 20; $i++) {
    echo get_fizzbuzz($i) . PHP_EOL;
}
