
<?php

$config['db']['params']['host'] = 'localhost';
$config['db']['params']['port'] = '3306';
$config['db']['params']['user'] = 'root';
$config['db']['params']['pass'] = 'epw7h6';
$config['db']['params']['type']   = 'mysql';
$config['db']['params']['dbname'] = 'test';
$config['db']['table']['prefix'] = 'prefix_';

$config['path']['root']['web'] = 'http://localhost';
$config['path']['root']['server'] = '/var/www/html';
$config['path']['offset_request_url'] = '0';
$config['db']['tables']['engine'] = 'InnoDB';
return $config;
?>