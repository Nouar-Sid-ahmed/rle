<?php
function decode_rle(string $str_rle) {
    $n = "";
    $string = "";
    $parity = 0;
    if ($str_rle === "") {
        return "";
    } elseif (!ctype_alnum($str_rle) || ctype_alpha($str_rle[0])) {
        return "$$$";
    }

    for($i = 0; isset($str_rle[$i]); $i ++) {
        if (ord($str_rle[$i]) < 58 && ord($str_rle[$i]) > 47) {
            if ($parity % 2 == 0) {
                $parity ++;
            }
            $n .= $str_rle[$i];
        } else {
            if (isset($str_rle[$i + 1]) && ctype_alpha($str_rle[$i + 1])) {
                return "$$$";
            } else {
                if ($parity % 2 == 1) {
                    $parity ++;
                }
                foreach (range(1, $n) as $k) {
                    $string .= $str_rle[$i];
                }
                $n = "";
            }
        }
    }

    if ($parity % 2 === 1) {
        return "$$$";
    }
    return $string;
}
