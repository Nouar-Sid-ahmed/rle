<?php
function decode_rle(string $str_rle) {
    $string = "";
    if ($str_rle == "") {
        return "";
    } elseif (strlen($str_rle) < 2) {
        return "$$$";
    }
    for ($i = 0; isset($str_rle[$i]); $i ++) {
        if ($str_rle[$i] == chr(0)){}
            foreach (range(2, ord($str_rle[$i + 1]) + 1) as $j) {
                if (isset($str_rle[$i + $j])) {
                    $string .= $str_rle[$i + $j];
                } else {
                    return "$$$";
                }
            }
            $i += ord($str_rle[$i + 1]) + 1;
        } else {
            foreach (range(1, ord($str_rle[$i])) as $j) {
                if (isset($str_rle[$i + 1])) {
                    $string .= $str_rle[$i + 1];
                } else {
                    return "$$$";
                }
            }
            $i ++;
        }
    }
    return $string;
}
