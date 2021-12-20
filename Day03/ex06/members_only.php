<?php
if (!$_SERVER['PHP_AUTH_USER']) {
    header('WWW-Authenticate: Basic realm="members"');
}
if ($_SERVER['PHP_AUTH_USER'] == 'zaz' && $_SERVER['PHP_AUTH_PW'] == 'Ilovemylittleponey') {
    echo "<html><body>Hello Zaz<br /><img src='data:image/png;base64," . base64_encode(file_get_contents("../img/42.png")) . "'></body></html>";
} else {
    header('HTTP/1.0 401 Unauthorized');
    echo "<html><body>That area is accessible for members only</body></html>";
}
