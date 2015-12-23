<?php
/*-------------------------------------------------------
*
*   LiveStreet Engine Social Networking
*   Copyright © 2008 Mzhelskiy Maxim
*
*--------------------------------------------------------
*
*   Official site: www.livestreet.ru
*   Contact e-mail: rus.engine@gmail.com
*
*   GNU General Public License, version 2:
*   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*
---------------------------------------------------------
*/
/**
 * Настройки для локального сервера.
 * Для использования - переименовать файл в config.local.php
 */

/**
 * Настройка базы данных
 
$config['db']['params']['host'] = 'localhost';
$config['db']['params']['port'] = '3306';
$config['db']['params']['user'] = 'root';
$config['db']['params']['pass'] = 'epw7h6';
$config['db']['params']['type']   = 'mysql';
$config['db']['params']['dbname'] = 'bunker';
$config['db']['table']['prefix'] = 'prefix_';
*/
$config['db']['params']['host'] = 'localhost';
$config['db']['params']['port'] = '3306';
$config['db']['params']['user'] = 'root';
$config['db']['params']['pass'] = 'epw7h6';
$config['db']['params']['type']   = 'mysql';
$config['db']['params']['dbname'] = 'reboot';
$config['db']['table']['prefix'] = 'prefix_';


$config['path']['root']['web'] = '//reboot.lunavod.ru';
$config['path']['root']['server'] = '/var/www/reboot/';
$config['path']['offset_request_url'] = '0';
$config['db']['tables']['engine'] = 'InnoDB';
return $config;
?>
