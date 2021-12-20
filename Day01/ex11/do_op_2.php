#!/usr/bin/php
<?php
function myFilter($value)
{
    return ($value !== null && $value !== false && $value !== '');
}
if ($argc == 2) {
    $op = "+-*/%";
    $save_op;
    $count = 0;

    $str = trim($argv[1]);
    while (strpos($str, " "))
        $str = str_replace(' ', '', $str);
    for ($i = 0; $i < strlen($op); $i++) {
        if (substr_count($str, $op[$i]) > 1) { {
                echo "Syntax Error\n";
                exit(0);
            }
        } else if (substr_count($str, $op[$i]) == 1) {
            $count++;
            $save_op = $op[$i];
        }
        if ($count > 1) {
            echo "Syntax Error\n";
            exit(0);
        }
    }
    if (!($count)) {
        echo "Syntax Error\n";
        exit(0);
    }
    $str = explode($save_op, $str);
    $str = array_filter($str, 'myFilter');

    if (!(is_numeric($str[0]) && is_numeric($str[1]))) {
        echo "Syntax Error\n";
        exit(0);
    }
    if ($save_op == '/' && $str[1] == '0')
        exit(0);
    if ($save_op == '+')
        echo  $str[0] + $str[1];
    else if ($save_op == '-')
        echo  $str[0] - $str[1];
    else if ($save_op == '*')
        echo  $str[0] * $str[1];
    else if ($save_op == '/')
        echo  $str[0] / $str[1];
    else if ($save_op == '%')
        echo  $str[0] % $str[1];
} else
    echo "Incorrect Parameters\n";



?>