<?php
function evaluate($i) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        return 'FizzBuzz';
    } else if ($i % 3 === 0) {
        return 'Fizz';
    } else if ($i % 5 === 0) {
        return 'Buzz';
    } else {
        return $i;
    }
}

function render($output) {
    echo $output . PHP_EOL;
}

for ($i = 1; $i <= 20; $i++) {
    $output = evaluate($i);
    render($output);
}
