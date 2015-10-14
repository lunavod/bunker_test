<?php /* Smarty version Smarty-3.1.8, created on 2015-10-13 20:05:26
         compiled from "/var/www/html/templates/skin/reboot/blocks/block.blogInfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:536714399561d39d6ab9871-12182584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '034c375f9a26f91e81ce4606046529aa52e5d41b' => 
    array (
      0 => '/var/www/html/templates/skin/reboot/blocks/block.blogInfo.tpl',
      1 => 1444665005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '536714399561d39d6ab9871-12182584',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561d39d6abd369_62100409',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561d39d6abd369_62100409')) {function content_561d39d6abd369_62100409($_smarty_tpl) {?><section class="block">
	<header class="block-header">
		<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_blog_info'];?>
</h3>
	</header>
	
	<div class="block-content">
		<p id="block_blog_info"></p>
	</div>	
</section>


<section class="block">
	<header class="block-header">
		<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_blog_info_note'];?>
</h3>
	</header>
	
	<div class="block-content">	
		<p><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_blog_info_note_text'];?>
</p>
	</div>	
</section><?php }} ?>