<?php
include "encode_src/encode_str.php";

function encode_rle(string $str) {
    if ($str === "") {
        return "";
    } elseif (!ctype_alpha($str)) {
        return "$$$";   
    }
    if (strlen($str)==1){
        return chr(0).chr(1).$str[0];
    }
    return encode_str($str);
}