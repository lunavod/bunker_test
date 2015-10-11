<?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:17:53
         compiled from "/var/www/html/templates/skin/reboot/actions/ActionError/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:766051200561a99c1d86b41-27204632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '088ce0213868d7be4447f3b7e89d286a1ea036ed' => 
    array (
      0 => '/var/www/html/templates/skin/reboot/actions/ActionError/index.tpl',
      1 => 1443531693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '766051200561a99c1d86b41-27204632',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aMsgError' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561a99c1dcae57_86583022',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a99c1dcae57_86583022')) {function content_561a99c1dcae57_86583022($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cfg')) include '/var/www/html/engine/modules/viewer/plugs/function.cfg.php';
?><?php $_smarty_tpl->tpl_vars["noSidebar"] = new Smarty_variable(true, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('noShowSystemMessage'=>true), 0);?>



<?php if ($_smarty_tpl->tpl_vars['aMsgError']->value[0]['title']){?>
	<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['error'];?>
: <span><?php echo $_smarty_tpl->tpl_vars['aMsgError']->value[0]['title'];?>
</span></h2>
<?php }?>

<p><?php echo $_smarty_tpl->tpl_vars['aMsgError']->value[0]['msg'];?>
</p>
<p><a href="javascript:history.go(-1);"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['site_history_back'];?>
</a>, <a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['site_go_main'];?>
</a></p>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>