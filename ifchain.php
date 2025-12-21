<?php

// 1
$currentd_Day = date("D");


if ($currentd_Day=="Sun"){
    echo "This is Sunday. 12% Discount";
}
elseif ($currentd_Day=="Mon"){
    echo "This is Monday. 15% Discount";
}
elseif ($currentd_Day=="Tue"){
    echo "This is Tueday. 18% Discount";
}
elseif ($currentd_Day=="Wed"){
    echo "This is Wednesday. 20% Discount";
}
else{
    echo "2% Discount";
}

// 2
$age = 25;
if($age<13){
    echo "He is a kid";
}
elseif($age>=13 && $age<20){
    echo "He is a teen";
}
elseif($age>=20 && $age<60){
    echo "He is an adult";
}
else{
    echo "He is a senior";
}

// 3
$number = -7;
if($number >0){
    echo "the number is positive";
}

elseif($number <0){
    echo "the number is negative";
}

else{
    echo "the number is zero";
}

// 4
$marks = 75;

if($marks>=90){
    echo "Grade A";
}
elseif($marks>=80){
    echo "Grade B";
}
elseif($marks>=70){
    echo "Grade C";
}
elseif($marks>=60){
    echo "Grade D";
}
else{
    echo "Grade F or Fail";
}
// 5
$speed = 80;
if($speed>100){
    echo "Fine: TK1000";
}
elseif($speed>80){
    echo "Fine: TK800";
}
elseif($speed>60){
    echo "Fine: TK600";
}
else {
    echo "No Fine";
}
// 6
$signal = "Yellow";

if ($signal == "Red"){
    echo "Stop";
}
elseif ($signal == "Yellow"){
    echo "Get Ready";
}

elseif ($signal == "Green"){
    echo "Go";
}
else{
    echo "Invalid Signal";
}
// 7
$day = "Sat";
if($day = "Thu"){
    echo "Half Working Day";
}
elseif($day = "Fri"){
    echo "Weekend";
}
else{
    echo "Working Day";
}
// 8
$password = "mypassword123";
$length = "strlen($password)";

if($length<6){
    echo "Weak Password";
}elseif($length<10){
    echo "Medium Password";
}
else{
    echo "Strong Password";
}
// 9
$years = 8;

if ($years>=10){
    echo "Bonus: 20%";
}elseif($years>=5){
    echo "Bonus: 10%";
}elseif($years>=2){
    echo "Bonus: 5%";
}else{
    echo "No Bonus";
}
// 10
$level = 45;

if($level>=80){
    echo "Tank full - stop pump";
}
elseif($level>=50){
    echo "Tank half - normal";
}
elseif($level>=20){
    echo "Tank low - turn on pump soon";
}
else{
    echo "critical - turn on pump immediately";
}


?>