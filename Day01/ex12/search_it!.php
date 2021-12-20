#!/usr/bin/php
<?php
if ($argc > 2) {
    for ($i = 2; $i < $argc; $i++) {
        $str = substr($argv[$i], 0, strpos($argv[$i], ':'));
        if (!(strcmp($str, $argv[1]))) {
            $arr = strchr($argv[$i], ":");
        }
    }
    $arr = ltrim($arr, ':');
    if (strlen($arr) > 1)
        echo "$arr\n";
}
?>