<?php

include "decode_rle.php";

function decode_advanced_rle(string $input_path, string $output_path) {
	$string_rle = file_get_contents($input_path);
	if ($string_rle === false) {
		return 1;
	}
	$string_rle = decode_rle($string_rle);
	if (strcmp($string_rle, "$$$") === 0) {
		return 1;
	}
	if (file_put_contents($output_path, $string_rle) === false) {
		return 1;
	}
	return 0;
}