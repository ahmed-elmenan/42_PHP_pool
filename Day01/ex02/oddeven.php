#!/usr/bin/php
<?php
while (1) {
    echo "Enter a number: ";
    if (fscanf(STDIN, "%s", $num)) {
        if (is_numeric($num)) {
            if (!($num[-1] % 2))
                echo "The number $num is even\n";
            else
                echo "The number $num is odd\n";
        } else
            echo "'$num' is not a number\n";
    } else {
        echo "^D\n";
        exit;
    }
    $num = NULL;
}
?>