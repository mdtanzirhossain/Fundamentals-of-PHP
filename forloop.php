<?php
for($i=0;$i<10;$i++){
    echo $i;
}

$test = array("tanzir","0123456778","bd","097");
$count_array_value = count($test);

// echo $count_array_value;

for($i=0;$i<=$count_array_value;$i++){
    echo $test[$i]."</br>";
}

printing days of the week

for($day =1;$day<=7;$day++){
    echo "Day $day of the weak </br>";
}

displaying table numbers in a restaurant

for($table = 1;$table <=10; $table++){
    echo "service table number:$table </br>";
}
counting items on shelf
for($items = 1;$items <=12; $items++){
    echo "item $items placed on the shelf </br>";
}

showing monthly report numbers
for($month = 1;$month <=12; $month++){
    echo "Generating report for month $month </br>";
}


?>