<?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:17:53
         compiled from "/var/www/html/templates/skin/reboot/blocks/block.blogs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1290952350561a99c1918469-43543012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db34d845cac4975e4ae6bdc9f6b9e14811b68a6a' => 
    array (
      0 => '/var/www/html/templates/skin/reboot/blocks/block.blogs.tpl',
      1 => 1443531693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1290952350561a99c1918469-43543012',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'oUserCurrent' => 0,
    'sBlogsTop' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561a99c1943e08_75061459',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a99c1943e08_75061459')) {function content_561a99c1943e08_75061459($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/html/engine/modules/viewer/plugs/function.router.php';
?><div class="block" id="block_blogs">
	<header class="block-header">
		<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_blogs'];?>
</h3>
		<div class="block-update js-block-blogs-update fa fa-refresh"></div>
	</header>
	
	
	<div class="block-content">
		<ul class="nav nav-pills js-block-blogs-nav">
			<li class="active js-block-blogs-item" data-type="top"><a href="#"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_blogs_top'];?>
</a></li>
			<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
				<li class="js-block-blogs-item" data-type="join"><a href="#"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_blogs_join'];?>
</a></li>
				<li class="js-block-blogs-item" data-type="self"><a href="#"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_blogs_self'];?>
</a></li>
			<?php }?>
		</ul>
		
		
		<div class="js-block-blogs-content">
			<?php echo $_smarty_tpl->tpl_vars['sBlogsTop']->value;?>

		</div>

		
		<footer>
			<a href="<?php echo smarty_function_router(array('page'=>'blogs'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_blogs_all'];?>
</a>
		</footer>
	</div>
</div>
<?php }} ?>