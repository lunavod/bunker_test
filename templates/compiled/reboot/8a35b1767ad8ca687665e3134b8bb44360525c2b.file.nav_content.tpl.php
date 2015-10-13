<?php /* Smarty version Smarty-3.1.8, created on 2015-10-13 20:05:12
         compiled from "/var/www/html/templates/skin/reboot/nav_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:475139684561d39c855d314-94859051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a35b1767ad8ca687665e3134b8bb44360525c2b' => 
    array (
      0 => '/var/www/html/templates/skin/reboot/nav_content.tpl',
      1 => 1444665005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '475139684561d39c855d314-94859051',
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
  'unifunc' => 'content_561d39c8563e89_82715320',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561d39c8563e89_82715320')) {function content_561d39c8563e89_82715320($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['menu']->value){?>
	<?php if (in_array($_smarty_tpl->tpl_vars['menu']->value,$_smarty_tpl->tpl_vars['aMenuContainers']->value)){?><?php echo $_smarty_tpl->tpl_vars['aMenuFetch']->value[$_smarty_tpl->tpl_vars['menu']->value];?>
<?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ("menu.".($_smarty_tpl->tpl_vars['menu']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?>
<?php }?><?php }} ?>