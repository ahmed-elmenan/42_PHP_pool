<?php
if ($_POST['submit'] == 'OK' && $_POST['passwd'] && $_POST['login']) {
    if (file_exists("../private/passwd")) {
        $data = file_get_contents("../private/passwd");
        $global_array = unserialize($data);
        foreach ($global_array as $user) {
            if ($user['login'] == $_POST['login']) {
                echo "ERROR\n";
                exit;
            }
            $i++;
        }
    } else
        mkdir("../private");
    $account_credentials['login'] = $_POST['login'];
    $account_credentials['passwd'] = hash("whirlpool", $_POST['passwd']);
    $global_array[] = $account_credentials;
    $string_data = serialize($global_array);
    file_put_contents("../private/passwd", $string_data);
    echo "OK\n";
} else {
    echo "ERROR\n";
}
