#!/usr/bin/php
<?php
function myFilter($value) {
    return ($value !== null && $value !== false && $value !== ''); 
}
if ($argc > 1) {
    $arr = array();
    $tab = array();
    $num = array();
    for ($i = 1; $i < $argc; $i++) {
        $str = preg_split('/ /', $argv[$i]);
        $str = array_filter($str, 'myFilter');
        foreach ($str as $v)
            array_push($arr,  $v);
    }
    natcasesort($arr);
    foreach ($arr as  $v) {
        if (ctype_alpha($v))
            array_push($tab, $v);
    }
    foreach ($arr as  $v) {
        if (is_numeric($v))
            array_push($num, $v);
    }
    sort($num, 2);
    foreach ($num as $v) {
        array_push($tab, $v);
    }
    foreach ($arr as $v) {
        if (!ctype_alnum($v))
            array_push($tab, $v);
    }
    foreach ($tab as $v)
        echo "$v\n";
}
?>