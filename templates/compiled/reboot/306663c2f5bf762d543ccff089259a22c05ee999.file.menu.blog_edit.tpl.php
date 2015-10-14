<?php /* Smarty version Smarty-3.1.8, created on 2015-10-14 12:33:47
         compiled from "/var/www/html/templates/skin/reboot/menu.blog_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1615095968561e217bddeaa9-25813997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '306663c2f5bf762d543ccff089259a22c05ee999' => 
    array (
      0 => '/var/www/html/templates/skin/reboot/menu.blog_edit.tpl',
      1 => 1444665005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1615095968561e217bddeaa9-25813997',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'oBlogEdit' => 0,
    'sMenuItemSelect' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561e217be0c852_75828133',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561e217be0c852_75828133')) {function content_561e217be0c852_75828133($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/html/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/var/www/html/engine/modules/viewer/plugs/function.hook.php';
?><h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_admin'];?>
: <a href="<?php echo $_smarty_tpl->tpl_vars['oBlogEdit']->value->getUrlFull();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlogEdit']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a></h2>

<ul class="nav nav-pills">
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='profile'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
edit/<?php echo $_smarty_tpl->tpl_vars['oBlogEdit']->value->getId();?>
/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_admin_profile'];?>
</a></li>
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='admin'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
admin/<?php echo $_smarty_tpl->tpl_vars['oBlogEdit']->value->getId();?>
/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_admin_users'];?>
</a></li>

	<?php echo smarty_function_hook(array('run'=>'menu_blog_edit_admin_item'),$_smarty_tpl);?>

</ul>

<?php echo smarty_function_hook(array('run'=>'menu_blog_edit'),$_smarty_tpl);?>
<?php }} ?>