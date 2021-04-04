<?php
function encode_rle(string $str) {
    $rle_str = "";
    $j = 1;

    if ($str === "") {
        return "";
    } elseif (!ctype_alpha($str)) {
        return "$$$";   
    }

    for($i = 0; isset($str[$i]); $i++) {
            while (isset($str[$i + 1]) && ($str[$i] == $str[$i + 1])) {
                $j ++;
                $i ++;
            }
            $rle_str .= $j . $str[$i];
            $j = 1;
    }
    return $rle_str;
}