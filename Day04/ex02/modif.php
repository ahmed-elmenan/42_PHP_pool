<?php
if ($_POST['submit'] == 'OK' && $_POST['login'] && $_POST['login'] && $_POST['oldpw'] && $_POST['newpw']) {
    $data = file_get_contents("../private/passwd");
    $valid_user = false;
    $i = 0;
    $global_array = unserialize($data);
    $hashed_oldpw = hash('whirlpool', $_POST['oldpw']);
    $hashed_newpw = hash('whirlpool', $_POST['newpw']);
    foreach ($global_array as $user) {
        if ($user['login'] == $_POST['login'] && $user['passwd'] == $hashed_oldpw) {
            $global_array[$i]['passwd'] = $hashed_newpw;
            $valid_user = true;
            break;
        }
        $i++;
    }
    if ($valid_user) {
        $string_data = serialize($global_array);
        file_put_contents("../private/passwd", $string_data);
        echo "OK\n";
    } else
        echo "ERROR\n";
} else {
    echo "ERROR\n";
}
