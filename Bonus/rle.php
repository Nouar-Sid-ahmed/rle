<?php

include "./src/encode_advanced_rle.php";
include "./src/decode_advanced_rle.php";

switch ($argv[1]) {
	case "encode":
		if (encode_advanced_rle($argv[2], $argv[3]) === 1) {
			echo "KO";
			return 1;
		}
		echo "OK";
		return 0;

	case "decode":
		if (decode_advanced_rle($argv[2], $argv[3]) === 1) {
			echo "KO";
			return 1;
		}
		echo "OK";
		return 0;

	default:
		echo "KO";
		return 1;
}