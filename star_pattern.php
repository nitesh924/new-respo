<?php
// Pattern 1
// *
// **
// ***
// ****
// *****

// for ($i = 1; $i <= 5; $i++) 
// { // outer loop
//     for ($j = 1; $j <= $i; $j++) 
//     { // inner loop
//         echo ("*");
//     }
//     echo ("\n");
// }

// Pattern 2
// *****
// ****
// ***
// **
// *

// for ($i = 5; $i >= 1; $i--) 
// {
//     for ($j = $i; $j > 0; $j--) 
//     {
//         echo ("*");
//     }
//     echo ("\n");
// }

// Pattern 3
//     *
//    **
//   ***
//  ****
// *****

for ($i = 1; $i <= 5; $i++) 
{
    for ($k = 5 - $i; $k > 0; $k--) 
    {
        echo ("");
    }
    for ($j = 1; $j <= $i; $j++) 
    {
        echo ("*");
    }
    echo ("\n");
}