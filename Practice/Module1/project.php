<?php
//  1 Number classifier

echo "Enter a Number". "\n"; 
$enterNumber = readline();
if($enterNumber > 0) {
    echo $enterNumber . " The Number is Positive";
} elseif($enterNumber == 0) {
    echo $enterNumber . " The Number is Zero";
} else {
    echo $enterNumber . " The Number is Negative";
}


// 2 Basic Authentication System

define("USERNAME","Anirban");
define("PASSWORD", "1234");

echo "Enter Your User Name: ";
$userName = readline();
echo "Enter Your Password: ";
$passWord = readline();

if(USERNAME == $userName && PASSWORD == $passWord) {
    echo "LogIn Success";
    
} else {
    echo "logIn Failure";
}

// 3 Simple Electricity Bill Calculator

echo "Enter Your Electricity Bill: ";
$bill = readline();

if ($bill > 0 && $bill <= 100) {
    $yourBill = $bill * 5;
    echo "Your bill is ". $yourBill;
} elseif ($bill >= 101 && $bill <= 200){
    $yourBill = $bill * 10;
    echo "Your bill is ". $yourBill;
} elseif ($bill > 201){
    $yourBill = $bill * 15;
    echo "Your bill is ". $yourBill;
} else {
    echo "You enter Negative Number or Zero";
}


// 4 Temperature Converter
echo "Choose Temperature if \"Celsius to Fahrenheit\" Or \" Fahrenheit to Celsius \" write just Cel or Fahen ";
$temChoose = readline();

switch ($temChoose) {
    case 'Cel':
        echo "Enter Celsius Temperature";
        $temp = readline();
        $result = ($temp * 1.8) + 32;
        echo $result;
        break;
    case 'Fahen':
        echo "Enter Fahrenheit Temperature";
        $temp = readline();
        $result = ($temp -32) * (5/9);
        echo $result;
        break;
    
    default:
        echo "You write wrong word.";
        break;
}

