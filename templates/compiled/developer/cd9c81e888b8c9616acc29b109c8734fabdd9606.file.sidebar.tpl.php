<?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:26:49
         compiled from "/var/www/html/templates/skin/developer/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1690031996561a9bd988d291-66316417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd9c81e888b8c9616acc29b109c8734fabdd9606' => 
    array (
      0 => '/var/www/html/templates/skin/developer/sidebar.tpl',
      1 => 1443531693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1690031996561a9bd988d291-66316417',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sidebarPosition' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561a9bd98a9a99_71333486',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a9bd98a9a99_71333486')) {function content_561a9bd98a9a99_71333486($_smarty_tpl) {?><aside id="sidebar" <?php if ($_smarty_tpl->tpl_vars['sidebarPosition']->value=='left'){?>class="sidebar-left"<?php }?>>
	<?php echo $_smarty_tpl->getSubTemplate ('blocks.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('group'=>'right'), 0);?>

</aside><?php }} ?>