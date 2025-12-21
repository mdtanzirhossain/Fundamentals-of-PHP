<?php
for($count = 1; $count <=10; $count++){
    echo "Hello </br>";
    if($count == 6){
        continue;
    }
    echo "World </br>";
    echo "Universe </br>";
}  
for ($i=0;$i<10;$i++){
    if($i==4){
        continue;
    }
    echo $i."</br>";
}

?>