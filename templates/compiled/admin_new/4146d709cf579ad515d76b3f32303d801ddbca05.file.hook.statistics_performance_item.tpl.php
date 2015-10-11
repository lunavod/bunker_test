<?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:17:02
         compiled from "/var/www/html/plugins/aceadminpanel/templates/skin/default/hook.statistics_performance_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:690827921561a998e551ec8-55089081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4146d709cf579ad515d76b3f32303d801ddbca05' => 
    array (
      0 => '/var/www/html/plugins/aceadminpanel/templates/skin/default/hook.statistics_performance_item.tpl',
      1 => 1405860042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '690827921561a998e551ec8-55089081',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aMemoryStats' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561a998e5613c6_62676054',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a998e5613c6_62676054')) {function content_561a998e5613c6_62676054($_smarty_tpl) {?><td>
    <h4>Memory</h4>
    memory limit: <strong><?php echo $_smarty_tpl->tpl_vars['aMemoryStats']->value['memory_limit'];?>
</strong><br/>
    memory usage: <strong><?php echo $_smarty_tpl->tpl_vars['aMemoryStats']->value['usage'];?>
</strong><br/>
    peak usage: <strong><?php echo $_smarty_tpl->tpl_vars['aMemoryStats']->value['peak_usage'];?>
</strong><br/>
</td>
<?php }} ?>