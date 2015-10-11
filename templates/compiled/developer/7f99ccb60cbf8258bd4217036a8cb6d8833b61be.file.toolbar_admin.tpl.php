<?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:26:49
         compiled from "/var/www/html/templates/skin/developer/toolbar_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1399673811561a9bd9badb16-73570385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '1399673811561a9bd9badb16-73570385',
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
  'unifunc' => 'content_561a9bd9bd3104_53106875',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a9bd9bd3104_53106875')) {function content_561a9bd9bd3104_53106875($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/html/engine/modules/viewer/plugs/function.router.php';
?><?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
<section class="toolbar-admin">
	<a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['admin_title'];?>
">
		<i class="icon-cog"></i>
	</a>
</section>
<?php }?><?php }} ?>