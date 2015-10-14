<?php /* Smarty version Smarty-3.1.8, created on 2015-10-14 12:33:49
         compiled from "/var/www/html/templates/skin/reboot/actions/ActionBlog/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:387264508561e217d7e9da7-01390908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ae685076d4f5b38045167f7f89c0a7d362d81fd' => 
    array (
      0 => '/var/www/html/templates/skin/reboot/actions/ActionBlog/admin.tpl',
      1 => 1444665005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '387264508561e217d7e9da7-01390908',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aBlogUsers' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
    'aLang' => 0,
    'oBlogUser' => 0,
    'oUser' => 0,
    'oUserCurrent' => 0,
    'BLOG_USER_ROLE_USER' => 0,
    'BLOG_USER_ROLE_BAN' => 0,
    'aPaging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561e217d819a62_48377819',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561e217d819a62_48377819')) {function content_561e217d819a62_48377819($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('menu.blog_edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>




<?php if ($_smarty_tpl->tpl_vars['aBlogUsers']->value){?>
	<form method="post" enctype="multipart/form-data" class="mb-20">
		<input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
" />
		
		<table class="table table-users">
			<thead>
				<tr>
					<th class="cell-name"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_admin_users'];?>
</th>
					<th class="ta-c"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_admin_users_administrator'];?>
</th>
					<th class="ta-c"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_admin_users_moderator'];?>
</th>
					<th class="ta-c"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_admin_users_reader'];?>
</th>
					<th class="ta-c"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_admin_users_bun'];?>
</th>
				</tr>
			</thead>
			
			<tbody>
				<?php  $_smarty_tpl->tpl_vars['oBlogUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oBlogUser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aBlogUsers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oBlogUser']->key => $_smarty_tpl->tpl_vars['oBlogUser']->value){
$_smarty_tpl->tpl_vars['oBlogUser']->_loop = true;
?>
					<?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->tpl_vars['oBlogUser']->value->getUser(), null, 0);?>
					
					<tr>
						<td class="cell-name">
							<a href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getProfileAvatarPath(24);?>
" alt="avatar" class="avatar" /></a>
							<a href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
</a>
						</td>
						
						<?php if ($_smarty_tpl->tpl_vars['oUser']->value->getId()==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()){?>
							<td colspan="3"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_admin_users_current_administrator'];?>
</td>
						<?php }else{ ?>
							<td class="ta-c"><input type="radio" name="user_rank[<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getId();?>
]" value="administrator" <?php if ($_smarty_tpl->tpl_vars['oBlogUser']->value->getIsAdministrator()){?>checked<?php }?> /></td>
							<td class="ta-c"><input type="radio" name="user_rank[<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getId();?>
]" value="moderator" <?php if ($_smarty_tpl->tpl_vars['oBlogUser']->value->getIsModerator()){?>checked<?php }?> /></td>
							<td class="ta-c"><input type="radio" name="user_rank[<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getId();?>
]" value="reader" <?php if ($_smarty_tpl->tpl_vars['oBlogUser']->value->getUserRole()==$_smarty_tpl->tpl_vars['BLOG_USER_ROLE_USER']->value){?>checked<?php }?> /></td>
							<td class="ta-c"><input type="radio" name="user_rank[<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getId();?>
]" value="ban" <?php if ($_smarty_tpl->tpl_vars['oBlogUser']->value->getUserRole()==$_smarty_tpl->tpl_vars['BLOG_USER_ROLE_BAN']->value){?>checked<?php }?> /></td>
						<?php }?>
					</tr>
				<?php } ?>
			</tbody>
		</table>

		<button type="submit" name="submit_blog_admin" class="button button-primary"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_admin_users_submit'];?>
</button>
	</form>

	<?php echo $_smarty_tpl->getSubTemplate ('paging.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('aPaging'=>$_smarty_tpl->tpl_vars['aPaging']->value), 0);?>

<?php }else{ ?>
	<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_admin_users_empty'];?>

<?php }?>



<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>