<?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:17:52
         compiled from "/var/www/html/templates/skin/reboot/menu.blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1495896918561a99c0c5d7e4-88790273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25391d941d6b18c06f115a68aea4a72a4f115d38' => 
    array (
      0 => '/var/www/html/templates/skin/reboot/menu.blog.tpl',
      1 => 1443531693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1495896918561a99c0c5d7e4-88790273',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sMenuItemSelect' => 0,
    'aLang' => 0,
    'iCountTopicsNew' => 0,
    'iCountTopicsCollectiveNew' => 0,
    'iCountTopicsPersonalNew' => 0,
    'oUserCurrent' => 0,
    'sMenuSubItemSelect' => 0,
    'sMenuSubBlogUrl' => 0,
    'iCountTopicsBlogNew' => 0,
    'sPeriodSelectCurrent' => 0,
    'sPeriodSelectRoot' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561a99c0f371d0_37635427',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a99c0f371d0_37635427')) {function content_561a99c0f371d0_37635427($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cfg')) include '/var/www/html/engine/modules/viewer/plugs/function.cfg.php';
if (!is_callable('smarty_function_router')) include '/var/www/html/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/var/www/html/engine/modules/viewer/plugs/function.hook.php';
?><div class="nav-filter-wrapper">
	<ul class="nav nav-filter">
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='index'){?>class="active"<?php }?>>
			<a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_all'];?>
</a> <?php if ($_smarty_tpl->tpl_vars['iCountTopicsNew']->value>0){?><a href="<?php echo smarty_function_router(array('page'=>'index'),$_smarty_tpl);?>
new/" class="new">+<?php echo $_smarty_tpl->tpl_vars['iCountTopicsNew']->value;?>
</a><?php }?>
		</li>

		<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='blog'){?>class="active"<?php }?>>
			<a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_collective'];?>
</a> <?php if ($_smarty_tpl->tpl_vars['iCountTopicsCollectiveNew']->value>0){?><a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
new/" class="new">+<?php echo $_smarty_tpl->tpl_vars['iCountTopicsCollectiveNew']->value;?>
</a><?php }?>
		</li>

		<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='log'){?>class="active"<?php }?>>
			<a href="<?php echo smarty_function_router(array('page'=>'personal_blog'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_personal'];?>
</a> <?php if ($_smarty_tpl->tpl_vars['iCountTopicsPersonalNew']->value>0){?><a href="<?php echo smarty_function_router(array('page'=>'personal_blog'),$_smarty_tpl);?>
new/" class="new">+<?php echo $_smarty_tpl->tpl_vars['iCountTopicsPersonalNew']->value;?>
</a><?php }?>
		</li>
		
		<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
			<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='feed'){?>class="active"<?php }?>>
				<a href="<?php echo smarty_function_router(array('page'=>'feed'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['userfeed_title'];?>
</a>
			</li>
		<?php }?>

		<?php echo smarty_function_hook(array('run'=>'menu_blog'),$_smarty_tpl);?>

	</ul>



	<?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='index'){?>
		<ul class="nav nav-filter nav-filter-sub">
			<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='good'){?>class="active"<?php }?>><a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_all_good'];?>
</a></li>
			<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='new'){?>class="active"<?php }?>>
				<a href="<?php echo smarty_function_router(array('page'=>'index'),$_smarty_tpl);?>
newall/" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_top_period_all'];?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_all_new'];?>
</a>
				<?php if ($_smarty_tpl->tpl_vars['iCountTopicsNew']->value>0){?> <a href="<?php echo smarty_function_router(array('page'=>'index'),$_smarty_tpl);?>
new/" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_top_period_24h'];?>
">+<?php echo $_smarty_tpl->tpl_vars['iCountTopicsNew']->value;?>
</a><?php }?>
			</li>
			<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='discussed'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'index'),$_smarty_tpl);?>
discussed/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_all_discussed'];?>
</a></li>
			<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='top'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'index'),$_smarty_tpl);?>
top/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_all_top'];?>
</a></li>
			<?php echo smarty_function_hook(array('run'=>'menu_blog_index_item'),$_smarty_tpl);?>

		</ul>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='blog'){?>
		<ul class="nav nav-filter nav-filter-sub">
			<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='good'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['sMenuSubBlogUrl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_collective_good'];?>
</a></li>
			<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='new'){?>class="active"<?php }?>>
				<a href="<?php echo $_smarty_tpl->tpl_vars['sMenuSubBlogUrl']->value;?>
newall/" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_top_period_all'];?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_collective_new'];?>
</a>
				<?php if ($_smarty_tpl->tpl_vars['iCountTopicsBlogNew']->value>0){?> <a href="<?php echo $_smarty_tpl->tpl_vars['sMenuSubBlogUrl']->value;?>
new/" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_top_period_24h'];?>
">+<?php echo $_smarty_tpl->tpl_vars['iCountTopicsBlogNew']->value;?>
</a><?php }?>
			</li>
			<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='discussed'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['sMenuSubBlogUrl']->value;?>
discussed/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_collective_discussed'];?>
</a></li>
			<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='top'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['sMenuSubBlogUrl']->value;?>
top/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_collective_top'];?>
</a></li>
			<?php echo smarty_function_hook(array('run'=>'menu_blog_blog_item'),$_smarty_tpl);?>

		</ul>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='log'){?>
		<ul class="nav nav-filter nav-filter-sub">
			<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='good'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'personal_blog'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_personal_good'];?>
</a></li>
			<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='new'){?>class="active"<?php }?>>
				<a href="<?php echo smarty_function_router(array('page'=>'personal_blog'),$_smarty_tpl);?>
newall/" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_top_period_all'];?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_personal_new'];?>
</a>
				<?php if ($_smarty_tpl->tpl_vars['iCountTopicsPersonalNew']->value>0){?> <a href="<?php echo smarty_function_router(array('page'=>'personal_blog'),$_smarty_tpl);?>
new/" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_top_period_24h'];?>
">+<?php echo $_smarty_tpl->tpl_vars['iCountTopicsPersonalNew']->value;?>
</a><?php }?>
			</li>
			<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='discussed'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'personal_blog'),$_smarty_tpl);?>
discussed/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_personal_discussed'];?>
</a></li>
			<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='top'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'personal_blog'),$_smarty_tpl);?>
top/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_personal_top'];?>
</a></li>
			<?php echo smarty_function_hook(array('run'=>'menu_blog_log_item'),$_smarty_tpl);?>

		</ul>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['sPeriodSelectCurrent']->value){?>
		<ul class="nav nav-filter nav-filter-sub">
			<li <?php if ($_smarty_tpl->tpl_vars['sPeriodSelectCurrent']->value=='1'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['sPeriodSelectRoot']->value;?>
?period=1"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_top_period_24h'];?>
</a></li>
			<li <?php if ($_smarty_tpl->tpl_vars['sPeriodSelectCurrent']->value=='7'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['sPeriodSelectRoot']->value;?>
?period=7"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_top_period_7d'];?>
</a></li>
			<li <?php if ($_smarty_tpl->tpl_vars['sPeriodSelectCurrent']->value=='30'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['sPeriodSelectRoot']->value;?>
?period=30"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_top_period_30d'];?>
</a></li>
			<li <?php if ($_smarty_tpl->tpl_vars['sPeriodSelectCurrent']->value=='all'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['sPeriodSelectRoot']->value;?>
?period=all"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_top_period_all'];?>
</a></li>
		</ul>
	<?php }?>
</div><?php }} ?>