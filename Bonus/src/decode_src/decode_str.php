<?php
include "decode_different.php";
include "decode_similar.php";

function decode_str($str_rle){
    $string = "";
    $objet = ["",0];
    for ($i = 0; isset($str_rle[$i]); $i ++) {
        if ($str_rle[$i] == chr(0)){
            $objet = decode_different($str_rle,$i);
            if ($objet[0] == "$$$"){
                return "$$$";
            }
            $i = $objet[1];
            $string .= $objet[0];
        } else {
            $objet = decode_similar($str_rle,$i);
            if ($objet[0] == "$$$"){
                return "$$$";
            }
            $i = $objet[1];
            $string .= $objet[0];
        }
    }
    return $string;    
}