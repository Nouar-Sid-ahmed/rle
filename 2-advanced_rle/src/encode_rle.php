<?php

function encode_rle(string $str) {
    $rle_str = "";
    $cmp = 1;
    $j = 1;
    if ($str === "") {
        return "";
    } elseif (!ctype_alpha($str)) {
        return "$$$";   
    }
    for($i = 0; isset($str[$i]); $i ++) {
        while ((isset($str[$i + $j])) && ($str[$i]== $str[$i + $j]) && $j < 255) {
                $j ++;
        }
        if ($cmp >255){
            $rle_str .= write_last($str, $i, $cmp);
            $cmp = 1;
        }
        if ($j > 1) {
            if ($cmp != 1) {
                $rle_str .= write_last($str, $i, $cmp);
            }
            $rle_str .= chr($j) .$str[$i];
            $i += $j - 1;
            $j = 1;
            $cmp = 1;
        } else if ($cmp < 256){
            $j = 1;
            $cmp ++ ;
        }

    }
    if ($cmp != 1) {
        $rle_str .= write_last($str, $i, $cmp);
    }
    return $rle_str;
}

function write_last(string $str, int $i, int $cmp) {
    $str_send = chr(0).chr($cmp - 1);
    while ($cmp != 1) {
        $str_send .= $str[$i - $cmp + 1];
        $cmp --;
    }
    return $str_send;
}