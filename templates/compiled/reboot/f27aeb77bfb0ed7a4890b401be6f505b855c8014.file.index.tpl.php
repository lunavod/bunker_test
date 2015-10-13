<?php /* Smarty version Smarty-3.1.8, created on 2015-10-13 20:06:11
         compiled from "/var/www/html/templates/skin/reboot/actions/ActionIndex/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1405966995561d3a03391f51-35421198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f27aeb77bfb0ed7a4890b401be6f505b855c8014' => 
    array (
      0 => '/var/www/html/templates/skin/reboot/actions/ActionIndex/index.tpl',
      1 => 1444665005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1405966995561d3a03391f51-35421198',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561d3a0339f483_39275714',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561d3a0339f483_39275714')) {function content_561d3a0339f483_39275714($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'blog'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('topic_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>