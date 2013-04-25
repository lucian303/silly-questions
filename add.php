<?php

/**
 * Create an application that accepts two arguments for input.
 * The system should output the sum of the two numbers but without using the native addition operation within php.
 *
 * @author Lucian Hontau
 */

if ($argc < 3) {
	print "Please provide two numbers\n";
	die;
}

$num1 = $argv[1];
$num2 = $argv[2];

if (!is_numeric($num1)) {
	print "The first argument is not a number\n";
	die;
}

if (!is_numeric($num2)) {
	print "The second argument is not a number\n";
	die;
}

// subtracting a negative as addition ... bit shifting is another, much more limited and perilous option here
print $num1 - (-$num2) . "\n";
