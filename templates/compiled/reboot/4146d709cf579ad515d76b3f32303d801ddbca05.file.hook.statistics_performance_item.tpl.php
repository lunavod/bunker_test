<?php /* Smarty version Smarty-3.1.8, created on 2015-10-13 20:05:13
         compiled from "/var/www/html/plugins/aceadminpanel/templates/skin/default/hook.statistics_performance_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110493815561d39c959ce61-79021080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4146d709cf579ad515d76b3f32303d801ddbca05' => 
    array (
      0 => '/var/www/html/plugins/aceadminpanel/templates/skin/default/hook.statistics_performance_item.tpl',
      1 => 1444665230,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110493815561d39c959ce61-79021080',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aMemoryStats' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561d39c95a12a8_88000501',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561d39c95a12a8_88000501')) {function content_561d39c95a12a8_88000501($_smarty_tpl) {?><td>
    <h4>Memory</h4>
    memory limit: <strong><?php echo $_smarty_tpl->tpl_vars['aMemoryStats']->value['memory_limit'];?>
</strong><br/>
    memory usage: <strong><?php echo $_smarty_tpl->tpl_vars['aMemoryStats']->value['usage'];?>
</strong><br/>
    peak usage: <strong><?php echo $_smarty_tpl->tpl_vars['aMemoryStats']->value['peak_usage'];?>
</strong><br/>
</td>
<?php }} ?>