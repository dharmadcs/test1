<?php

   // const STRING  = "aabbckkkml";
   // const STRING1 = "aaaabsdfbhckkhfdkml";


   $string="aabbckkkml";
   $string1="aaaabsdfbhckkhfdkml";

   echo("<h1>1. Menghitung banyak karakter yang sama </h1>");

   $a=count_chars($string, 1);
   foreach($a as $key => $s){
       echo(chr($key).$s);
   }

   echo "</br>";

   $b=count_chars($string1, 1);
   foreach($b as $key => $c){
      echo(chr($key).$c);
   }

?>