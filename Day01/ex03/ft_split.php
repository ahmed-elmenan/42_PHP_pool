#!/usr/bin/php
<?php
function myFilter($value)
{
    return ($value !== null && $value !== false && $value !== '');
}
function ft_split($str)
{
    $arr = preg_split('/ +/', trim($str));
    sort($arr, SORT_STRING);
    $arr = array_filter($arr, 'myFilter');
    return $arr;
}
?>