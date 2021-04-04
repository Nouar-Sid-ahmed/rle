<?php

function decode_similar($str_rle,$i){
    $objet = ["",0];
    foreach (range(1, ord($str_rle[$i])) as $j) {
        if (isset($str_rle[$i + 1])) {
            $objet[0] .= $str_rle[$i + 1];
        } else {
            $objet[1] = $i +1;
            $objet[0] = "$$$";
            return $objet;
        }
    }
    $objet[1] = $i +1;
    return $objet;
}