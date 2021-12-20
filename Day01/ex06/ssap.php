#!/usr/bin/php
<?php
function myFilter($value) {
    return ($value !== null && $value !== false && $value !== ''); 
}
if ($argc > 1) {
    $arr = array();
    for ($i = 1; $i < $argc; $i++) {
        $str = preg_split('/ +/', $argv[$i]);
        $str = array_filter($str, 'myFilter');
        foreach ($str as $v)
            array_push($arr,  $v);
    }
    sort($arr, 2);
    foreach ($arr as $value)
        echo "$value\n";
}
?>