<?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:26:48
         compiled from "/var/www/html/templates/skin/developer/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1819995276561a9bd8a1ee06-39711142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46d42768d2ec11c07df4a02f866714b1ffd1ff2d' => 
    array (
      0 => '/var/www/html/templates/skin/developer/nav.tpl',
      1 => 1443531693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1819995276561a9bd8a1ee06-39711142',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sMenuHeadItemSelect' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561a9bd8abc9a9_55261728',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a9bd8abc9a9_55261728')) {function content_561a9bd8abc9a9_55261728($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cfg')) include '/var/www/html/engine/modules/viewer/plugs/function.cfg.php';
if (!is_callable('smarty_function_router')) include '/var/www/html/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/var/www/html/engine/modules/viewer/plugs/function.hook.php';
?><nav id="nav">
	<ul class="nav nav-main">
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuHeadItemSelect']->value=='blog'){?>class="active"<?php }?>><a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_title'];?>
</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuHeadItemSelect']->value=='blogs'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'blogs'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blogs'];?>
</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuHeadItemSelect']->value=='people'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['people'];?>
</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuHeadItemSelect']->value=='stream'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'stream'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_menu'];?>
</a></li>

		<?php echo smarty_function_hook(array('run'=>'main_menu_item'),$_smarty_tpl);?>

	</ul>
	<?php echo smarty_function_hook(array('run'=>'main_menu'),$_smarty_tpl);?>

</nav><?php }} ?>