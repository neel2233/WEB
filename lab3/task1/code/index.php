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


