<?php
/**
 * Конфиг
 */

$config = array();

// Переопределить имеющуюся переменную в конфиге:
// Переопределение роутера на наш новый Action - добавляем свой урл  http://domain.com/filter
Config::Set('router.page.filter', 'PluginFilter_ActionFilter');
$config['table']['test_table'] = '___db.table.prefix___filter_table';
// Добавить новую переменную:
// $config['per_page'] = 15;
// Эта переменная будет доступна в плагине как Config::Get('plugin.filter.per_page')

return $config;
