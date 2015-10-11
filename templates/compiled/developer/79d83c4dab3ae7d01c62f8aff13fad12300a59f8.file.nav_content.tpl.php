<?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:26:48
         compiled from "/var/www/html/templates/skin/developer/nav_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1139578719561a9bd8ac4563-31719043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79d83c4dab3ae7d01c62f8aff13fad12300a59f8' => 
    array (
      0 => '/var/www/html/templates/skin/developer/nav_content.tpl',
      1 => 1443531693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1139578719561a9bd8ac4563-31719043',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'aMenuContainers' => 0,
    'aMenuFetch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561a9bd8af1b99_03128595',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a9bd8af1b99_03128595')) {function content_561a9bd8af1b99_03128595($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['menu']->value){?>
	<?php if (in_array($_smarty_tpl->tpl_vars['menu']->value,$_smarty_tpl->tpl_vars['aMenuContainers']->value)){?><?php echo $_smarty_tpl->tpl_vars['aMenuFetch']->value[$_smarty_tpl->tpl_vars['menu']->value];?>
<?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ("menu.".($_smarty_tpl->tpl_vars['menu']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?>
<?php }?><?php }} ?>