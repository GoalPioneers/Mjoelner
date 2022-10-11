<?php
    echo $_SERVER['HTTP_HOST'];
    echo $_SERVER['REQUEST_URI'];

    $agent = 'HTTP_USER_AGENT';
    $https = 'HTTPS';

    $ip = 'REMOTE_ADDR';

    $_SERVER['SERVER_PORT'];
    $h = 'REMOTE_HOST';

    $s = 'HTTP_ACCEPT_CHARSET';
    $p = 'HTTP_ACCEPT_ENCODING';
    $c = 'HTTP_ACCEPT_LANGUAGE';

    $b = 'SERVER_PROTOCOL';
    $a = 'SERVER_SOFTWARE';
?>