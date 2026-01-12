<?php

// date(formate, timestamp)

echo date("d")."</br>";
echo date("D")."</br>";
echo date("m")."</br>";
echo date("M")."</br>";
echo date("y")."</br>";
echo date("Y")."</br>";
echo date("y/m/d")."</br>"; // For date
echo date("Y/M/D")."</br>"; // not for date
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- Copyright -->

&copy; 2006-<?php echo date("Y");?>
</body>
</html>