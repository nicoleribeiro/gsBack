<?php

$url = 'https://github.com/nicoleribeiro/gsBack/public_html/';

$class = '/mensagem';
$param = '/1';

$response = file_get_contents($url . $class . $param);

echo $response;
