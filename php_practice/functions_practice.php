<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>functions_practice</title>
</head>
<body>
<?php

// Functions

// A function is bunch of code written in program to perform some specefic task

// Two major types of functions
// Buit-in fucntion
// User defined function

// Why should we use functions?
// 1. Reusability
// 2. Eay for error ddetections
// 3. Easyily maintained

// Camel case - every word after first one starts with Capital letter
// myFunction();

// Lower case - All with lovercase, underscore inbetween
// my_function();

// Pascal case - every word is capitalized
// MyFunction();
/*
function my_function() {
    echo "Hello!";
}
my_function();
*/

echo "<br>";

// Pass by value
/*
$num1 = 10;
$num2 = 15;
function add($num1,$num2) {
    $result = $num1 + $num2;
    return $result;
}
echo "The number is: " . add($num1, $num2);
echo "<br>";
function subtract ($num1, $num2) {
    echo $num1 - $num2;
}
subtract($num1, $num2);
*/


/*
$price = 100;
$vat = 0.21;
function calculateVat ($price, $vat){
    $calculatedPrice = ($price *$vat)+ $price;
    return $calculatedPrice;
}
echo "Price: ".$price."<br>";
echo "Vat: ".$vat. "<br>";
echo "Total Price: ".calculateVat($price, $vat);
*/
/*
$year = 2000;
function isLeapYear($year){
   if ($year % 400 == 0 || $year%4==0) {
        return true;
   } else {
        return false;
   }
}

if(isLeapYear($year)) {
    echo $year. " is a leap year";
} else{
    echo $year. "is not a leap year";
}

*/
?>
</body>
</html>
