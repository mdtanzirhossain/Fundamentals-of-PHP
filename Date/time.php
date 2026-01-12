<?php
// H = 24 hours
// h = 12 hours
// i = minute
// s = second
// a = am or pm

// echo "Now time is ".date("h:i:sa");
date_default_timezone_set("America/New_York");
echo "Now time is ".date("h:i:sa")."</br>";
date_default_timezone_set("Asia/Dhaka");
echo "Now time is ".date("h:i:sa");
?>