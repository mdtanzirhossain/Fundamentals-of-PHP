switch (variable) works for exact matches
<!-- switch (variable) does not work for logical conditions. use true or false istead of variable -->

<?php
1
$current_Day = date('D');
 switch($current_Day){
    case "Sun":
        echo "This is Sunday, 10% Discount";
        break;
    case "Mon":
        echo "This is Monday, 12% Discount";
        break;
    case "Tue":
        echo "This is Tuesday, 14% Discount";
        break;
    case "Wed":
        echo "This is Wednesday, 16% Discount";
        break;
    case "Thu":
        echo "This is Thursday, 18% Discount";
        break;

    default:
    echo "Normally 2% Discount";
 }

2
$age=18;
switch(true){
case ($age<13):
    echo "He is a kid";
    break;
case ($age>=13 && $age<20):
    echo "He is a teen";
    break;
case ($age>=20 && $age<60):
    echo "He is a adult";
    break;
default:
echo "He is a senior";
}

3
$marks = 75;

switch(true){ 
case($marks>=90):
    echo "Grade A";
    break;
case($marks>=80):
    echo "Grade B";
    break;
case($marks>=70):
    echo "Grade C";
    break;
case($marks>=60):
    echo "Grade D";
    break;
default:
echo "Grade F or Fail";
}

4

$number = -7;

switch(true){ 
case($number >0):
    echo "the number is positive";
    break;
case($number <0):
    echo "the number is negative";
    break;

default:
echo "the number is zero";
}

5
$speed = 80;

switch(true){ 
case($speed>100):
    echo "Fine: TK1000";
    break;
case($speed>80):
    echo "Fine: TK800";
    break;
case($speed>60):
    echo "Fine: TK600";
    break;

default:
echo "No Fine";
}

6
$signal = "Yellow";

switch($signal){ 
case "Red":
    echo "Stop";
    break;
case "Yellow":
    echo "Get Ready";
    break;
case "Green":
    echo "Go";
    break;

default:
echo "Invalid Signal";
}

7
$day = "Sat";

switch($day){ 
case "Thu":
    echo "Half Working Day";
    break;
case "Fri":
    echo "Weekend";
    break;

default:
echo "Working Day";
}

8

$years = 8;

switch(true){ 
case($years>=10):
    echo "Bonus: 20%";
    break;
case($years>=5):
    echo "Bonus: 10%";
    break;
case($years>=2):
    echo "Bonus: 5%";
    break;

default:
echo "No Bonus";
}

9
$level = 45;

switch(true){ 
case($level>=80):
    echo "Tank full - stop pump";
    break;
case($level>=50):
    echo "Tank half - normal";
    break;
case($level>=20):
    echo "Tank low - turn on pump soon";
    break;

default:
echo "critical - turn on pump immediately";
}

10

$password = "mypassword123";
$length = "strlen($password)";

switch(true){
    case($length<6):
        echo "Weak Password";
        break;
    case($length<10):
        echo "Medium Password";
        break;
    default:
    echo "Strong Password";

}
?>