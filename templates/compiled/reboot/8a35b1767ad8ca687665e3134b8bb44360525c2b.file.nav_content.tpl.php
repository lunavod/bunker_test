<?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:17:52
         compiled from "/var/www/html/templates/skin/reboot/nav_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2029470757561a99c0c205d2-47866256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a35b1767ad8ca687665e3134b8bb44360525c2b' => 
    array (
      0 => '/var/www/html/templates/skin/reboot/nav_content.tpl',
      1 => 1443531693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2029470757561a99c0c205d2-47866256',
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
  'unifunc' => 'content_561a99c0c530e8_56354145',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a99c0c530e8_56354145')) {function content_561a99c0c530e8_56354145($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['menu']->value){?>
	<?php if (in_array($_smarty_tpl->tpl_vars['menu']->value,$_smarty_tpl->tpl_vars['aMenuContainers']->value)){?><?php echo $_smarty_tpl->tpl_vars['aMenuFetch']->value[$_smarty_tpl->tpl_vars['menu']->value];?>
<?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ("menu.".($_smarty_tpl->tpl_vars['menu']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?>
<?php }?><?php }} ?>