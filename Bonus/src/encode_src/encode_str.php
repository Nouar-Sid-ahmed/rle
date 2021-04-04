<?php
include "similar.php";
include "different.php";

function encode_str($str){
    $j = 0;
    $object=["",0,0];
    $rle_str = "";
    for($i = 1; isset($str[$i]); $i++) {
        if (isset($str[$i]) && $str[$i] == $str[$i - 1]){
            $object = similar($str,$i,$j);
            $rle_str .= $object[0];
            $i = $object[1];
            $j = 0;
            echo "sim:   i= $i :j=  $j  :str=  $object[0]\n";
        }
        if (isset($str[$i]) && $str[$i] != $str[$i - 1]){
            $object = different($str,$i,$j);
            $rle_str .= $object[0];
            $i = $object[1];
            $j = $object[2];
            echo "dif:   i= $i :j=  $j  :str=  $object[0]\n";
        }
    }
    return $rle_str;
}