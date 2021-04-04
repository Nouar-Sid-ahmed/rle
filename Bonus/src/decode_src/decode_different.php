<?php

function decode_different($str_rle,$i){
    $objet = ["",0];
    foreach (range(2, ord($str_rle[$i + 1]) + 1) as $j) {
        if (isset($str_rle[$i + $j])) {
            $objet[0] .=$str_rle[$i + $j];
        } else {
            $objet[1] = $i + ord($str_rle[$i + 1]) + 1;
            $objet[0] = "$$$";
            return $objet;
        }
    }
    $objet[1] = $i + ord($str_rle[$i + 1]) + 1;
    return $objet;
}