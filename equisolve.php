<?php
const MAX_SOLUTIONS = 10;


// https://www.geeksforgeeks.org/php-sum-digits-number/
// PHP program to calculate the sum of digits
function sumOfDigits(string $num) {
    $sum = 0;
    for ($i = 0; $i < strlen($num); $i++){
        $sum += $num[$i];
    }
	echo "\t sumOfDigits = $sum";
    return $sum;
}


function containsASeven(string $number) {
	return strpos($number, 7) !== false ;
}


$solutions = [];
$numberToTest = 0;

while(count($solutions) < MAX_SOLUTIONS)
{
	// filter numbers which do not contains a 7
	if( containsASeven($numberToTest)) {
		
		echo "\n Testing $numberToTest:";
		if(sumOfDigits($numberToTest) === 10 ){
			echo "\t Good !";
			$solutions[] = $numberToTest;
		}
	}
	$numberToTest++;
}


echo "\n\nHere are the lowest 10 positive integers where the sum of the digits of each integer equals 10 and contains the number 7 as one of the digits:\n";
print_r($solutions);