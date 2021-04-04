<?php

function different($str,$i,$j){
    $object=["",$i,1];
    $tmp = "";
    if ($i == 1){
            $tmp .= $str[$i-1];
            $j++;
    }
    while (isset($str[$i]) && !($str[$i] == $str[$i - 1]) && $j < 255) {
        $tmp .= $str[$i];
        $i ++;
        $j ++;
        echo "i=     :".$i."\n";
    }
    if (isset($str[$i]) && $j < 255){
        $tmp =  substr($tmp,0,-1);
        $j--;
    }
    if ($j > 0) {
        $object[0] = chr(0).chr($j).$tmp;
        $object[2] = ($j == 255) ? 0 : 1;
        $object[1] = $i-1;
    }
    return $object;
}