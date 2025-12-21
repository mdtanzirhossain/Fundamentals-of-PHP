<?php
$video = 100;

while(condition is true){
    // this is block is executed
}


$starting = 0;
while($starting<=10){
    echo "keep reading $starting</br>"; 
    $starting+=1;
}

echo "Next Line";


$init = 0;
while($init<=10){

    echo $init."</br>";
    $init+=1;
}

$post = 20;
$init = 0;
while($init<=$post){
    echo "this is a post".$init."</br>";
    $init++;
}

print numbers from 1 to 10

$number = 1;

while ($number <=10){
    echo "Number: $number </br>";
    $number++;
}
print odd numbers upto 15

$odd = 1;

while ($odd <=15){
    echo "Odd Number: $odd </br>";
    $odd+=2;
}

countdown from 20 to 1
$countdown = 20;

while ($countdown >=0){
    echo "countdown: $countdown </br>";
    $countdown--;
}

$sum = 0;
$number = 1;

while ($sum <= 50) {
    $sum += $number;
    echo "Added $number — Total: $sum </br>";
    $number++;
}

print multiplication table of 5

$i = 1;
while ($i<=10){
    echo "$i x 5 = ".(5*$i)."</br>";
    $i++;
}
?>