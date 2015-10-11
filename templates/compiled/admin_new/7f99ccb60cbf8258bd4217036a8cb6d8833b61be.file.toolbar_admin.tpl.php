<?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:26:43
         compiled from "/var/www/html/templates/skin/developer/toolbar_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1104662214561a9bd3c57a48-38844403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f99ccb60cbf8258bd4217036a8cb6d8833b61be' => 
    array (
      0 => '/var/www/html/templates/skin/developer/toolbar_admin.tpl',
      1 => 1443531693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1104662214561a9bd3c57a48-38844403',
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
  'unifunc' => 'content_561a9bd3c94c40_93438389',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a9bd3c94c40_93438389')) {function content_561a9bd3c94c40_93438389($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/html/engine/modules/viewer/plugs/function.router.php';
?><?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
<section class="toolbar-admin">
	<a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['admin_title'];?>
">
		<i class="icon-cog"></i>
	</a>
</section>
<?php }?><?php }} ?>