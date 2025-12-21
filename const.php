<!-- define is case sensitive -->
 <!-- define is a constant function -->
  <!-- global variable can be assigned in define function. No need to write "global" inside/call it -->
   <!--  multiple values can be assigned-->
     <!-- define(variable name,value) -->

   <?php
   
   define("MESSAGE", "Welcome to programming");
   
   function getName(){
    echo MESSAGE;
   }

   getname();

define('INFO', [
    'tanzir hossain',
    '017234567345',
    'Dhaka-Tejgao'
]);

var_dump(INFO[0]);
echo INFO[1];
echo INFO[0];
   ?>