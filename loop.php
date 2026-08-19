<?php
// Q1. Print numbers from 1 to 10 
// for loop 

// for ($i = 1; $i <= 10; $i++) {
//     echo "$i\n";
// }

// while loop 

// $i = 1;
// while ($i <= 10) {
//     echo "$i\n";
//     $i++;
// }

// do while loop 

// $i = 1;
// do {
//     echo "$i\n";
//     $i++;
// } while ($i <= 10);

// Q2. Print even numbers from 2 to 20

// for loop 

// for ($i = 1; $i <= 20; $i++) {
//     if ($i % 2 === 0) {
//         echo "$i\n";
//     }
// }

// while loop 

// $i = 1;
// while ($i <= 20) {
//     if ($i % 2 === 0) {
//         echo "$i\n";
//     }
//     $i++;
// }

// do while loop 
// $i = 1;
// do {
//     if ($i % 2 === 0) {
//         echo "$i\n";
//     }
//     $i++;
// } while ($i <= 20);

// Q3. Print odd numbers from 1 to 19
// for loop
// for ($i = 1; $i <= 20; $i++) {
//     if ($i % 2 !== 0) {
//         echo "$i\n";
//     }
// }

// while loop 

// $i = 1;
// while ($i <= 20) {
//     if ($i % 2 !== 0) {
//         echo "$i\n";
//     }
//     $i++;
// }

// do while loop 

// $i = 1;
// do {
//     if ($i % 2 !== 0) {
//         echo "$i\n";
//     }
//     $i++;
// } while ($i <= 20);

// Q4. Print numbers from 10 to 1 (reverse order)

// for loop 
// for ($i = 10; $i >= 1; $i--) {
//     echo "$i\n";
// }

// while loop 

// $i = 10;
// while($i>=1){
//     echo "$i\n";
//     $i--;
// }

// do while loop 
// $i = 10;
// do {
//     echo "$i\n";
//     $i--;
// } while ($i >= 1);

// Q5. Print the first 10 multiples of 3

// for ($i = 1; $i <= 10; $i++) {
//     echo 3 * $i . "\n";
// }

// $i = 1;
// while ($i <= 10) {
//     echo 3 * $i . "\n";
//     $i++;
// }

// $i = 1;
// do {
//     echo 3 * $i . "\n";
//     $i++;
// } while ($i <= 10);

// Q6. Sum of numbers from 1 to 100

// $sum = 0;
// for ($i = 1; $i <= 100; $i++) {
//     $sum += $i;
// }
// echo $sum . "\n";
// Q7. Print each character of a string
// $ch = "hello";
// for ($i = 0; $i < strlen($ch); $i++) {
//     echo $ch[$i] . "\n";
// }

// Q8. Print numbers divisible by 5 from 1 to 50

// for loop 
// for ($i = 1; $i <= 10; $i++) {
//     echo $i * 5 . "\n";
// }

// while loop 

// $i = 1;
// while ($i <= 10) {
//     echo $i * 5 . "\n";
//     $i++;
// }

// do while loop 
// $i = 1;
// do {
//     echo $i * 5 . "\n";
//     $i++;
// } while ($i <= 10);

// Q9. Find the factorial of a number(5!)
// $fact = 1;
// for ($i = 4; $i >= 1; $i--) {
//     $fact *= $i;
// }
// echo $fact . "\n";

// Q10. print 1 to 100 multiple of 3 = "fizz" and 5 = "buzz" 

// for ($i = 1; $i <= 100; $i++) {
//     if ($i % 3 === 0 && $i % 5 === 0) {
//         echo "Fizz and Buzz" . "\n";
//     } else if ($i % 3 === 0) {
//         echo "Fizz" . "\n";
//     } else if ($i % 5 === 0) {
//         echo "Buzz" . "\n";
//     }
// }

// Q11 Create an array of the first 10 square numbers

// $a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// $result = [];
// for ($i = 0; $i < count($a); $i++) {
//     array_push($result, $a[$i] * $a[$i]);
// }
// print_r($result);

// Q12 Print the reverse of a string without using inbuilt functions 

// $ch = "hello";
// for ($i = strlen($ch) - 1; $i >= 0; $i--) {
//     echo $ch[$i] . "\n";
// }

// Q13. Print the sum of even numbers from 1 to 50 
// $sum = 0;
// for ($i = 1; $i <= 50; $i++) {
//     if ($i % 2 === 0) {
//         $sum += $i;
//     }
// }
// echo $sum;

// Q14. Print the sum of odd numbers from 1 to 50 
// $sum = 0;
// for ($i = 1; $i <= 50; $i++) {
//     if ($i % 2 !== 0) {
//         $sum += $i;
//     }
// }
// echo $sum;

// Q15. Print the multiplication table of 7 in table format 

// for ($i = 1; $i <= 10; $i++) {
//     echo "7 x $i = " . 7 * $i . "\n";
// }


// Q16. Create an array of the first 10 odd numbers 

// $a = [];
// for ($i = 1; count($a) < 10; $i++) {
//     if ($i % 2 !== 0) {
//         $a[] = $i;
//     }
// }
// print_r($a);

// Q17. Find the maximum number in an array [12,23,4,56,99] 

// $a = [12, 23, 4, 99, 56];
// $max = $a[0];
// for ($i = 0; $i < count($a); $i++) {
//     if ($a[$i] > $max) {
//         $max = $a[$i];
//     }
// }
// echo $max;

// Q18. Find the minimum number in an array [12,23,4,56,99] 

// $a = [12, 23, 4, 99, 56];
// $min = $a[0];
// for ($i = 0; $i < count($a); $i++) {
//     if ($a[$i] < $min) {
//         $min = $a[$i];
//     }
// }
// echo $min;

// Q19. Find the sum of positive numbers in an array [2,9,-10,20,-6,19] 

// $a = [2, 9, -10, 20, -6, 19];
// $sum = 0;
// for ($i = 0; $i < count($a); $i++) {
//     if ($a[$i] > 0) {
//         $sum += $a[$i];
//     }
// }
// echo $sum;

// Q20. Program to check whether a string is a palindrome or not 

$str = "madam";
$result = "";
for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $result .= $str[$i];
}
if ($str === $result) {
    echo "palindrome";
} else {
    echo "not palindrome";
}
