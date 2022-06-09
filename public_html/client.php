<?php
    $url = 'http://localhost/gsBack/public_html/api';

    $class = '/mensagem';
    $param = '/1';

    $response = file_get_contents($url.$class.$param);

    echo $response;
?>