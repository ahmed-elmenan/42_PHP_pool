#!/usr/bin/php
<?php
function ft_is_sort($tab)
{
    $arr = $tab;
    sort($tab, SORT_STRING);
    $rev = array_reverse($tab);
    return $arr == $tab || $arr == $rev;
}

?>