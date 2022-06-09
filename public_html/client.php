<?php

$url = 'https://github.com/nicoleribeiro/gsBack/tree/main/public_html/api';

$class = '/mensagem';
$param = '/1';

$response = file_get_contents($url . $class . $param);

echo $response;
