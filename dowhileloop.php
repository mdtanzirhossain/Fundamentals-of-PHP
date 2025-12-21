<?php
$start_point = 1;
do{
    echo "This is the start point $start_point </br>";
    $start_point+=2;
}
while($start_point<=20);

$number = 10;
do{
    echo "Countdown: $number </br>";
    $number--;
}while($number>=1);


$even = 2;
do{
    echo "Even Number: $even</br>";
    $even+=2;
}while($even<=20);

$count = 1;
do{
    echo "Message Number: $count</br>";
    $count++;
}while($count<=5);

$num = 1;
do{
    echo "Message Number: $num</br>";
    $num+=2;
}while($num<=100);

$subject = 1;
do{
    echo "Enter marks for subject $subject </br>";
    $subject++;
}while($subject<=-5);


?>