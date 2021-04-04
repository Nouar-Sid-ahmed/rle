<?php
include "decode_src/decode_str.php";

function decode_rle(string $str_rle) {
    if ($str_rle == "") {
        return "";
    } elseif (strlen($str_rle) < 2) {
        return "$$$";
    }
    return decode_str($str_rle);
}