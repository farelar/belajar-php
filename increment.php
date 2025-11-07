<?php
 
 $a = 10;
 
 $b = $a++;

 $b = $a;
 $a = $a + 1;

 var_dump($a);
 var_dump($b);