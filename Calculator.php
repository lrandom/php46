<?php
 class Calculator{
     function add()
     {
         if (func_num_args() == 2) {
             return func_get_arg(0) + func_get_arg(1);
         }

         if (func_num_args() == 3) {
             return func_get_arg(0) + func_get_arg(1) + func_get_arg(2);
         }
     }


 }

$calculator = new Calculator();
$calculator->add(10, 20);
$calculator->add(10, 20, 30);
?>