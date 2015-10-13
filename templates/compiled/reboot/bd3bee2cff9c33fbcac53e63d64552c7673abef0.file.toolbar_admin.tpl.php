<?php /* Smarty version Smarty-3.1.8, created on 2015-10-13 20:05:12
         compiled from "/var/www/html/templates/skin/reboot/toolbar_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1957970386561d39c8599829-70892673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd3bee2cff9c33fbcac53e63d64552c7673abef0' => 
    array (
      0 => '/var/www/html/templates/skin/reboot/toolbar_admin.tpl',
      1 => 1444665005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1957970386561d39c8599829-70892673',
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
  'unifunc' => 'content_561d39c859f261_27631723',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561d39c859f261_27631723')) {function content_561d39c859f261_27631723($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/html/engine/modules/viewer/plugs/function.router.php';
?><?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
<section class="toolbar-admin">
	<a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['admin_title'];?>
">
		<i class="fa fa-cog"></i>
	</a>
</section>
<?php }?><?php }} ?>