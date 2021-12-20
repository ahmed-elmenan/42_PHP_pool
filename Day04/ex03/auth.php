<?php
function auth($login, $passwd){
    $data = file_get_contents("../private/passwd");
    $global_array = unserialize($data);
    $hashed_pw = hash('whirlpool', $passwd);
    foreach ($global_array as $user) {
        if ($user['login'] == $login && $user['passwd'] == $hashed_pw)
            return true;
    }
    return false;
}
