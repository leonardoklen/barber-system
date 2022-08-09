<?php

$isDevEnviroment = $_SERVER['HTTP_HOST'] == 'localhost:8088';

return [
    'URL_BASE' => $isDevEnviroment ? 'http://localhost:8088/' : 'https://barbeariaqueiroz.com.br/' //Config::get('config.URL_BASE');
];