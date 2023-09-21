<!--Kazi Shahed Ahmed 
 Module - 2: LIVE EXAM 
 COURSE: Web Develeopment with PHP & LARAVEL.

-->



<!--Github Link - https://github.com/InvisibleAhmed/Module2_LiveExam.git    -->


<!--Task-1: Create a PHP script using a loop to print all even numbers between 1 and 10.--> 

<?php
// Loop through numbers from 1 to 10
for ($i = 2; $i <= 10; $i += 2) {
    echo $i . " "; 
}
?>


<!--Task-2: Declare a function named 'greet' that takes one parameter, 'name'. The function should print a greeting message with the name passed to it when it is called.--> 

<?php
function greet($name) {
    echo "Hello! Welcome to Ostad $name!";
}

// Calling the greet function with a name
greet("Shahed Ahmed");
?>


<!--Task-3: Create a recursive function called 'factorial' in PHP that calculates and returns the factorial of a number.--> 

<?php
//declaring functions
function factorial($n) {
    if ($n <= 1) {
        return 1; // Base case: factorial of 0 or 1 is 1
    } else {
        return $n * factorial($n - 1); // Recursive case: n! = n * (n-1)!
    }
}

// Calculating the factorial of a number
$number = 5;
$result = factorial($number);

echo "The factorial of $number is $result";
?>


<!--Task-4: Write a PHP function named 'fibonacci' that prints the Fibonacci series up to 10 numbers.--> 

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
