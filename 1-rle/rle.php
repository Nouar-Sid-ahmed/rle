<?php
include './src/encode_rle.php';
include './src/decode_rle.php';

if (strcmp($argv[1], "encode") == 0) {
    echo encode_rle($argv[2]);
} elseif (strcmp($argv[1], "decode") == 0) {
    echo decode_rle($argv[2]);
}