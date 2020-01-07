<?php

function multiply($arr){
    $result = $arr[0]*$arr[1]*$arr[2]*$arr[3]*$arr[4];
    return $result;
}

echo multiply(array(1, 3, 5 ,7, 9));
