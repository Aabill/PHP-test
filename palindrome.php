<?php 

function isPalindrome( $string )  
{
    if (!isset($string) || $string == '') return false;
    $word = trim(strtolower($string));
    if ( $word == strrev($word) ) return true;
    return false;
}

var_dump(isPalindrome("Deleveled"));