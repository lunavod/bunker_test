<?php /* Smarty version Smarty-3.1.8, created on 2015-10-14 12:33:49
         compiled from "/var/www/html/templates/skin/reboot/actions/ActionBlog/invited.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2133782669561e217d826ce0-24553204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9b82f64dfdc0def208fa73798788da82acf89ea' => 
    array (
      0 => '/var/www/html/templates/skin/reboot/actions/ActionBlog/invited.tpl',
      1 => 1444665005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2133782669561e217d826ce0-24553204',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'oBlogEdit' => 0,
    'aBlogUsersInvited' => 0,
    'oBlogUser' => 0,
    'oUser' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561e217d8446a8_90286394',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561e217d8446a8_90286394')) {function content_561e217d8446a8_90286394($_smarty_tpl) {?><section class="block">
	<header class="block-header">
		<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_admin_user_add_header'];?>
</h3>
	</header>

	<div class="block-content">
		<form onsubmit="return ls.blog.addInvite(<?php echo $_smarty_tpl->tpl_vars['oBlogEdit']->value->getId();?>
);">
			<p>
				<label for="blog_admin_user_add"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_admin_user_add_label'];?>
:</label>
				<input type="text" id="blog_admin_user_add" name="add" class="input-text input-width-full autocomplete-users-sep" />
			</p>
		</form>

		<br />
		<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_admin_user_invited'];?>
:</h3>

		<div id="invited_list_block">
			<?php if ($_smarty_tpl->tpl_vars['aBlogUsersInvited']->value){?>
				<ul id="invited_list">
					<?php  $_smarty_tpl->tpl_vars['oBlogUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oBlogUser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aBlogUsersInvited']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oBlogUser']->key => $_smarty_tpl->tpl_vars['oBlogUser']->value){
$_smarty_tpl->tpl_vars['oBlogUser']->_loop = true;
?>
						<?php $_smarty_tpl->tpl_vars['oUser'] = new Smarty_variable($_smarty_tpl->tpl_vars['oBlogUser']->value->getUser(), null, 0);?>
						
						<li id="blog-invite-remove-item-<?php echo $_smarty_tpl->tpl_vars['oBlogEdit']->value->getId();?>
-<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getId();?>
">
							<a href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
" class="user"><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
</a> - 
							<a href="#" onclick="return ls.blog.repeatInvite(<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getId();?>
, <?php echo $_smarty_tpl->tpl_vars['oBlogEdit']->value->getId();?>
);"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_user_invite_readd'];?>
</a>
							<a href="#" onclick="return ls.blog.removeInvite(<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getId();?>
, <?php echo $_smarty_tpl->tpl_vars['oBlogEdit']->value->getId();?>
);"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_user_invite_remove'];?>
</a>
						</li>						
					<?php } ?>
				</ul>
			<?php }?>

			<span id="blog-invite-empty" class="notice-empty" <?php if ($_smarty_tpl->tpl_vars['aBlogUsersInvited']->value){?>style="display: none"<?php }?>><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_admin_user_add_empty'];?>
</span>
		</div>
	</div>
</section><?php }} ?>