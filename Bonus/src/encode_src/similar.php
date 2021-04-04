<?php

function similar($str,$i,$j){
    $object = ["",0,0];
    if ($i == 1){
            $j++;
    }
    while (isset($str[$i]) && ($str[$i] == $str[$i - 1]) && $j < 255) {
        echo "-\n";
        $i ++;
        $j ++;
    }
    $object[1] = $i;
    if ($j > 0) {
        $object[0] = chr($j).$str[$i-1];
    }
    return $object;
}