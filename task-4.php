<?php

//I am declaring fibonacci function here
function fibonacci($n) {
    $fib = array();
    $fib[0] = 0;
    $fib[1] = 1;

    echo "Fibonacci Series up to $n numbers: ";

    if ($n >= 1) {
        echo $fib[0] . " ";
    }

    if ($n >= 2) {
        echo $fib[1] . " ";
    }

    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
        echo $fib[$i] . " ";
    }
}

// I am Calling the fibonacci function to print the series up to 10 numbers
fibonacci(10);
?>
