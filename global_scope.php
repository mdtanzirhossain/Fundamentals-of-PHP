<?php


$name1 = "Baki";
function username1(){
   global $name1;
    echo "Username1: ".$GLOBALS['name1']."<br>";
}
username1();


$name2 = "Hasan";
function username2(){
   global $name2;
    echo "Username2: ".$name2;
}
username2();


?>