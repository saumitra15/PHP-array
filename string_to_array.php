<?php

/***************************** STRING TO ARRAY ********************************/

$str = "1001,1002,1003,1004,1005,1006,1007,1008,1009,1010";
// echo $str; // to view the string

// Change string to array
$array = explode(",",$str);
// print_r($array); // to view the array

/***************************** REMOVE DUPLICATES FROM STRING **********************************/

$str1 = "1001,1002,1003,1004,1005,1006,1007,1008,1009,1010,1010,1009";

// Remove Duplicates -> Use this function to remove duplicates from a comma seperated string
function removeDup($string) {
		return implode(',', array_keys(array_flip(explode(',', $string))));
}

$str2 = removeDup($str1);
// Mahe the string to array
$array = explode(",",$str2);
// print_r($array); // to view the array


/**********************************************************************************************/








