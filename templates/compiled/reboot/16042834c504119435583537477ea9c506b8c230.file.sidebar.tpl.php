<?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:17:53
         compiled from "/var/www/html/templates/skin/reboot/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:328278615561a99c1722af6-28986704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16042834c504119435583537477ea9c506b8c230' => 
    array (
      0 => '/var/www/html/templates/skin/reboot/sidebar.tpl',
      1 => 1443531693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '328278615561a99c1722af6-28986704',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sidebarPosition' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561a99c1731a49_47948714',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a99c1731a49_47948714')) {function content_561a99c1731a49_47948714($_smarty_tpl) {?><aside id="sidebar" <?php if ($_smarty_tpl->tpl_vars['sidebarPosition']->value=='left'){?>class="sidebar-left"<?php }?>>
	<?php echo $_smarty_tpl->getSubTemplate ('blocks.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('group'=>'right'), 0);?>

</aside><?php }} ?>