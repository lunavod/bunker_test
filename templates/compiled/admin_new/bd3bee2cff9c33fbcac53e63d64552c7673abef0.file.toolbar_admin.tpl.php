<?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:17:02
         compiled from "/var/www/html/templates/skin/reboot/toolbar_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1667317206561a998e4c20d0-40417210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd3bee2cff9c33fbcac53e63d64552c7673abef0' => 
    array (
      0 => '/var/www/html/templates/skin/reboot/toolbar_admin.tpl',
      1 => 1443531693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1667317206561a998e4c20d0-40417210',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561a998e4d6462_52738792',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a998e4d6462_52738792')) {function content_561a998e4d6462_52738792($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/html/engine/modules/viewer/plugs/function.router.php';
?><?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
<section class="toolbar-admin">
	<a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['admin_title'];?>
">
		<i class="fa fa-cog"></i>
	</a>
</section>
<?php }?><?php }} ?>