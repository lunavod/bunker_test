<?php /* Smarty version Smarty-3.1.8, created on 2015-10-13 20:05:38
         compiled from "/var/www/html/templates/skin/reboot/blocks/block.blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1095338567561d39e2aa0a85-21121457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba1c27463f724628e0b5b45c5e8de7aec9b75e94' => 
    array (
      0 => '/var/www/html/templates/skin/reboot/blocks/block.blog.tpl',
      1 => 1444665005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1095338567561d39e2aa0a85-21121457',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oTopic' => 0,
    'oBlog' => 0,
    'aLang' => 0,
    'oUserCurrent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561d39e2ac2974_08354810',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561d39e2ac2974_08354810')) {function content_561d39e2ac2974_08354810($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_declension')) include '/var/www/html/engine/modules/viewer/plugs/modifier.declension.php';
if (!is_callable('smarty_function_router')) include '/var/www/html/engine/modules/viewer/plugs/function.router.php';
?><?php if ($_smarty_tpl->tpl_vars['oTopic']->value){?>
	<?php $_smarty_tpl->tpl_vars["oBlog"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getBlog(), null, 0);?>
	<?php if ($_smarty_tpl->tpl_vars['oBlog']->value->getType()!='personal'){?>
	<section class="block block-type-blog">
		<header class="block-header">
			<h3><a href="<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getUrlFull();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a></h3>
		</header>

		<div class="block-content">
			<span id="blog_user_count_<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getCountUser();?>
</span> <?php echo smarty_modifier_declension($_smarty_tpl->tpl_vars['oBlog']->value->getCountUser(),$_smarty_tpl->tpl_vars['aLang']->value['reader_declension'],'russian');?>
<br />
			<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getCountTopic();?>
 <?php echo smarty_modifier_declension($_smarty_tpl->tpl_vars['oBlog']->value->getCountTopic(),$_smarty_tpl->tpl_vars['aLang']->value['topic_declension'],'russian');?>

			
			<br />
			<br />
			
			<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()!=$_smarty_tpl->tpl_vars['oBlog']->value->getOwnerId()){?>
				<button type="submit" class="button button-primary <?php if ($_smarty_tpl->tpl_vars['oBlog']->value->getUserIsJoin()){?>active<?php }?>" id="blog-join" data-only-text="1" onclick="ls.blog.toggleJoin(this,<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
); return false;"><?php if ($_smarty_tpl->tpl_vars['oBlog']->value->getUserIsJoin()){?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_leave'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_join'];?>
<?php }?></button>&nbsp;&nbsp;
			<?php }?>
			<a href="<?php echo smarty_function_router(array('page'=>'rss'),$_smarty_tpl);?>
blog/<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getUrl();?>
/" class="rss">RSS</a>
		</div>
	</section>
	<?php }?>
<?php }?><?php }} ?>