<?php

function max_array($arr){
 
 $max_number = $arr[0];
 foreach($arr as $a){
    if($a >= $max_number){
        $max_number =$a;
    }
 }
 return $max_number;
 }
 
 echo max_array(array(19,6,7,8,30,19));
 