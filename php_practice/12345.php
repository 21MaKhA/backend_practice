<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

//VARIABLES
// A symbol or a value that stands for a value

$name = "Slim Shady";
echo "Hi my name is " . $name . "<br>";
echo "Ammma lead singer in D12 baby" . "<br>";


$age = 21;
echo "My age is {$age}";

// Data types in PHP
//Integer
//Float
//String
//Booleans
//Arrays
//Object
//Resource
//Null
echo "<br>";
//ARRAYS

$cars = array("BMW", "Audi", "Mercedes");
echo $cars[1];
$cars2 = array("Volvo", "Chevy", "Volkswagen");

echo "<br>";
$myCar = array("Audi", 2015, 75.304);
print_r($myCar);
echo "<br>";
$cars = array_merge($cars, $cars2);

print_r($cars);

echo "<br>";
// An Associative Array

$cars_m = array("Audi"=>50.500, "BMW" => 40.700, "Mercedes" =>60.300);
print_r($cars_m);
echo "<br>";
foreach ($cars_m as $key => $value) {
    echo "My " . $key . " has ". $value . "milage <br>";
}

echo "<br>";
// Multidimensional Arrays
//Expensive
//Audi, Mercedes, BMW

//Inexpensive
//Volvo, Ford, Toyota

$_cars = array(
    "Expensive"=>array("Audi", "BMW", "Mercedes"),"Inexpensive"=>array("Volvo", "Ford", "Toyota")
    );

echo $_cars["Inexpensive"][2];

echo "<br>";
//Assignment Operators
// += ----- Add and assign
// -= ----- Subtract and assign
// *= ----- Multiply and Assign
// /= ----- Divideand assign
// .= ----- Contrate and assign

echo "<br>";
// Comparison Operators
$x = 15;
$y = 15;
//spaceship
// If the value on the left is less than the value on the right, system will retur a -1
//
//If the value on the left is equal to the value on the right, the system will return 0
//
//If the value on the left is greater than the value on the left, the system will return a 1

if ($y <=> $x) {
    echo "This is true";
} else{
    echo"This is false";
}

echo "<br>";
// Increment and Decrement
// ++$x ----- Pre-Increment
// $x++ ----- Post Increment
// --$x ----- Pre-Decrement
// $x-- ----- Post - Decrement

echo "<br>";
// Logical Operation
//And --- Both X and Y are true
//&&  --- Both X and Y are true
//Or  --- Either X or Y are true
//||  --- Either X or Y are true
//Xor --- Either X or Y are true, not both
//!   --- Either X or Y are true, not both
// 1 = True - 0 = False

$x = 1;
$y = 10;
if (!$x == $y && 1 == 1) {
    echo "true";
} else {
    echo "false";
}


echo "<br>";
// Control Structures
// if statement
// else statement
// else if statement
// Switch statement

$_age = 51;

if ($_age<20){
    echo "Sorry you are too young!";
}  elseif ($_age > 50){
    echo "You are too old to party";
} else {
    echo "You are old enough to go out!";
}

echo "<br>";
//Conditional statement - Switch

$role = "Employee";
switch ($role) {
    case 'Visitor':
        echo "Welcome Visitor";
    break;
    case 'Admin':
        echo "Welcome Admin";
    break;
    case 'Superadmin':
        echo "Welcome Superadmin";
    break;
    case 'Boss':
        echo "Welcome Boss";
    break;
    default:
        echo "User has no role";
}

echo "<br>";
//Loops
//While loop

$x = 1;
while($x<=10){
    echo $x . "<br>";
    $x++;
}

echo "<br>";
//Do-while loop First dO and then while

$cookie = 1;
do{
    echo "I love cookies! <br>";
    $cookie++;
} while($cookie <= 10);

echo "<br>";
//for loop

for($v = 1; $v<=10; $v++) {
    echo "The number is:". $v;
    echo "<br>";
}
echo "<br>";
$deposit = 1000;
$interest = 0.05;
for ($years =1; $years<=5; $years++) {
    $deposit += ($deposit*$interest);
    echo "The total amount after " . $years." year is: ". $deposit. "<br>";
}

echo "<br>";
//forach loop - iterate for array variables

$rappers = array("Eminem", 'J.Cole', "Kendrick Lamar", "2pac", "Notorious B.I.G" );

foreach ($rappers as $rapper) {
    echo "The king of the rap game rapper ". $rapper;
    echo "<br>";
}

$person = array("Name"=>"Shomakhmud", "Age"=>30, "Gender"=>"Male");
foreach ($person as $kap=>$value){
    echo $kap . ": ".$value;
    echo "<br>";
}

echo "<br>";
echo "<br>";

// Constants
// function - defined();
// Keyword - CONST

//Define


// Constants are always in uppercase
//Name has the same rule as variables

define("COMPANY_NAME", "Apple");

echo COMPANY_NAME;
// CONST
const MY_NAME = "Shomakhmud";
echo MY_NAME;

echo "<br>"








?>
</body>
</html>
