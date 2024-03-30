<?php
 // a

 function findSubStr($str)
 {
    $regexp = '/a[a-z]{2}b/';
    $match = [];
    preg_match_all($regexp, $str, $match);
    return $match;
 }

 $str = 'ahb acb aeb aeeb adcb axeb';
var_dump(findSubStr($str));

// b
function cube($match)
{
    return $match[0]** 3;
}

function replaceNums($str)
{
    
    $regexp = '/[0-9]+/';
    return preg_replace_callback($regexp, 'cube', $str);
}

$str = 'a1b2c3';
echo replaceNums($str);
echo "\n";
