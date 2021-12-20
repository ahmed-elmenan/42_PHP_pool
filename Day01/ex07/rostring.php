#!/usr/bin/php
<?php
function myFilter($value)
{
    return ($value !== null && $value !== false && $value !== '');
}
if ($argc > 1) {
    $arr = preg_split('/ /', $argv[1]);
    $arr = array_filter($arr, 'myFilter');
    $str = $arr;
    array_shift($arr);
    foreach ($arr as $value)
        echo "$value ";
    $str = array_shift(array_values($str));
    echo "$str\n";
}
?>