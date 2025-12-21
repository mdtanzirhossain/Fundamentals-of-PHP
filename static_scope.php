<?php

function increment(){
static $store = 1;
echo $store."</br>";
$store+=10;
}

increment();
increment();
increment();


function price(){
static $sale = 100;
echo $sale."</br>";
$sale+=100;
}

price();
price();
price();


function quantity(){
static $total = 1000;
echo $total."</br>";
$total+=1000;
}

quantity();
quantity();
quantity();

function salary(){
static $basic = 30000;
echo $basic."</br>";
$basic+=5000;
}

salary();
salary();
salary();

function rent(){
static $monthly_rent = 15000;
echo $monthly_rent."</br>";
$monthly_rent+=1500;
}

rent();
rent();
rent();




?>