<?php /* Smarty version Smarty-3.1.8, created on 2015-10-13 20:05:13
         compiled from "/var/www/html/templates/skin/reboot/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:326003068561d39c94ce455-81148324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16042834c504119435583537477ea9c506b8c230' => 
    array (
      0 => '/var/www/html/templates/skin/reboot/sidebar.tpl',
      1 => 1444665005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '326003068561d39c94ce455-81148324',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sidebarPosition' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561d39c94d1c91_14116117',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561d39c94d1c91_14116117')) {function content_561d39c94d1c91_14116117($_smarty_tpl) {?><aside id="sidebar" <?php if ($_smarty_tpl->tpl_vars['sidebarPosition']->value=='left'){?>class="sidebar-left"<?php }?>>
	<?php echo $_smarty_tpl->getSubTemplate ('blocks.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('group'=>'right'), 0);?>

</aside><?php }} ?>