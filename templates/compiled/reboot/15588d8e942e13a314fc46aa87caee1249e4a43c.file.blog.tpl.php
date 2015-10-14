<?php /* Smarty version Smarty-3.1.8, created on 2015-10-14 12:33:44
         compiled from "/var/www/html/templates/skin/reboot/actions/ActionBlog/blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23526981561e217839bfc5-94678118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15588d8e942e13a314fc46aa87caee1249e4a43c' => 
    array (
      0 => '/var/www/html/templates/skin/reboot/actions/ActionBlog/blog.tpl',
      1 => 1444665005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23526981561e217839bfc5-94678118',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oBlog' => 0,
    'oUserCurrent' => 0,
    'aLang' => 0,
    'aBlogs' => 0,
    'oBlogDelete' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
    'oVote' => 0,
    'iCountBlogAdministrators' => 0,
    'oUserOwner' => 0,
    'aBlogAdministrators' => 0,
    'oBlogUser' => 0,
    'oUser' => 0,
    'iCountBlogModerators' => 0,
    'aBlogModerators' => 0,
    'iCountBlogUsers' => 0,
    'aBlogUsers' => 0,
    'sMenuSubItemSelect' => 0,
    'sMenuSubBlogUrl' => 0,
    'iCountTopicsBlogNew' => 0,
    'sPeriodSelectCurrent' => 0,
    'sPeriodSelectRoot' => 0,
    'bCloseBlog' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561e217848f165_11323832',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561e217848f165_11323832')) {function content_561e217848f165_11323832($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang_load')) include '/var/www/html/engine/modules/viewer/plugs/function.lang_load.php';
if (!is_callable('smarty_function_router')) include '/var/www/html/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/var/www/html/engine/modules/viewer/plugs/function.hook.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php $_smarty_tpl->tpl_vars["oUserOwner"] = new Smarty_variable($_smarty_tpl->tpl_vars['oBlog']->value->getOwner(), null, 0);?>
<?php $_smarty_tpl->tpl_vars["oVote"] = new Smarty_variable($_smarty_tpl->tpl_vars['oBlog']->value->getVote(), null, 0);?>


<script type="text/javascript">
	jQuery(function($){
		ls.lang.load(<?php echo smarty_function_lang_load(array('name'=>"blog_fold_info,blog_expand_info"),$_smarty_tpl);?>
);
	});
</script>


<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
	<div id="blog_delete_form" class="modal">
		<header class="modal-header">
			<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_admin_delete_title'];?>
</h3>
			<a href="#" class="close jqmClose"></a>
		</header>
		
		
		<form action="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
delete/<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
/" method="POST" class="modal-content">
			<p><label for="topic_move_to"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_admin_delete_move'];?>
:</label>
			<select name="topic_move_to" id="topic_move_to" class="input-width-full">
				<option value="-1"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_delete_clear'];?>
</option>
				<?php if ($_smarty_tpl->tpl_vars['aBlogs']->value){?>
					<optgroup label="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blogs'];?>
">
						<?php  $_smarty_tpl->tpl_vars['oBlogDelete'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oBlogDelete']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aBlogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oBlogDelete']->key => $_smarty_tpl->tpl_vars['oBlogDelete']->value){
$_smarty_tpl->tpl_vars['oBlogDelete']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['oBlogDelete']->value->getId();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlogDelete']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</option>
						<?php } ?>
					</optgroup>
				<?php }?>
			</select></p>
			
			<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
" name="security_ls_key" />
			<button type="submit" class="button button-primary"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_delete'];?>
</button>
		</form>
	</div>
<?php }?>



<div class="blog">
	<header class="blog-header">
		<div id="vote_area_blog_<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
" class="vote <?php if ($_smarty_tpl->tpl_vars['oBlog']->value->getRating()>0){?>vote-count-positive<?php }elseif($_smarty_tpl->tpl_vars['oBlog']->value->getRating()<0){?>vote-count-negative<?php }?> <?php if ($_smarty_tpl->tpl_vars['oVote']->value){?> voted <?php if ($_smarty_tpl->tpl_vars['oVote']->value->getDirection()>0){?>voted-up<?php }elseif($_smarty_tpl->tpl_vars['oVote']->value->getDirection()<0){?>voted-down<?php }?><?php }?>">
			<div class="vote-label">Рейтинг</div>
			<a href="#" class="vote-up" onclick="return ls.vote.vote(<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
,this,1,'blog');"></a>
			<a href="#" class="vote-down" onclick="return ls.vote.vote(<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
,this,-1,'blog');"></a>
			<div id="vote_total_blog_<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
" class="vote-count count" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_vote_count'];?>
: <?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getCountVote();?>
"><?php if ($_smarty_tpl->tpl_vars['oBlog']->value->getRating()>0){?>+<?php }?><?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getRating();?>
</div>
		</div>
		
		
		<img src="<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getAvatarPath(48);?>
" alt="avatar" class="avatar" />
		
		
		<h2><?php if ($_smarty_tpl->tpl_vars['oBlog']->value->getType()=='close'){?><i title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_closed'];?>
" class="icon icon-lock"></i> <?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</h2>
		
		
		<ul class="actions">
			<li><a href="<?php echo smarty_function_router(array('page'=>'rss'),$_smarty_tpl);?>
blog/<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getUrl();?>
/" class="rss">RSS</a></li>
			<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()!=$_smarty_tpl->tpl_vars['oBlog']->value->getOwnerId()){?>
				<li><a href="#" onclick="ls.blog.toggleJoin(this,<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
); return false;" class="link-dotted"><?php if ($_smarty_tpl->tpl_vars['oBlog']->value->getUserIsJoin()){?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_leave'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_join'];?>
<?php }?></a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&($_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()==$_smarty_tpl->tpl_vars['oBlog']->value->getOwnerId()||$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()||$_smarty_tpl->tpl_vars['oBlog']->value->getUserIsAdministrator())){?>
				<li>
					<a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
edit/<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
/" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_edit'];?>
" class="edit"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_edit'];?>
</a></li>
					<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
						<li><a href="#" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_delete'];?>
" id="blog_delete_show" class="delete"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_delete'];?>
</a>
					<?php }else{ ?>
						<a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
delete/<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
/?security_ls_key=<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_delete'];?>
" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_admin_delete_confirm'];?>
');" ><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_delete'];?>
</a>
					<?php }?>
				</li>
			<?php }?>
		</ul>
	</header>
	
	
	<div class="blog-more-content" id="blog-more-content" style="display: none;">
		<div class="blog-content">
			<p class="blog-description"><?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getDescription();?>
</p>
		</div>
		
		
		<footer class="blog-footer">
			<?php echo smarty_function_hook(array('run'=>'blog_info_begin','oBlog'=>$_smarty_tpl->tpl_vars['oBlog']->value),$_smarty_tpl);?>

			<strong><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_user_administrators'];?>
 (<?php echo $_smarty_tpl->tpl_vars['iCountBlogAdministrators']->value;?>
):</strong>							
			<a href="<?php echo $_smarty_tpl->tpl_vars['oUserOwner']->value->getUserWebPath();?>
" class="user"><i class="icon-user"></i><?php echo $_smarty_tpl->tpl_vars['oUserOwner']->value->getLogin();?>
</a>
			<?php if ($_smarty_tpl->tpl_vars['aBlogAdministrators']->value){?>			
				<?php  $_smarty_tpl->tpl_vars['oBlogUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oBlogUser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aBlogAdministrators']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oBlogUser']->key => $_smarty_tpl->tpl_vars['oBlogUser']->value){
$_smarty_tpl->tpl_vars['oBlogUser']->_loop = true;
?>
					<?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->tpl_vars['oBlogUser']->value->getUser(), null, 0);?>  									
					<a href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
" class="user"><i class="icon-user"></i><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
</a>
				<?php } ?>	
			<?php }?><br />		

			
			<strong><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_user_moderators'];?>
 (<?php echo $_smarty_tpl->tpl_vars['iCountBlogModerators']->value;?>
):</strong>
			<?php if ($_smarty_tpl->tpl_vars['aBlogModerators']->value){?>						
				<?php  $_smarty_tpl->tpl_vars['oBlogUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oBlogUser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aBlogModerators']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oBlogUser']->key => $_smarty_tpl->tpl_vars['oBlogUser']->value){
$_smarty_tpl->tpl_vars['oBlogUser']->_loop = true;
?>  
					<?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->tpl_vars['oBlogUser']->value->getUser(), null, 0);?>									
					<a href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
" class="user"><i class="icon-user"></i><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
</a>
				<?php } ?>							
			<?php }else{ ?>
				<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_user_moderators_empty'];?>

			<?php }?><br />
			
			
			<strong><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_user_readers'];?>
 (<?php echo $_smarty_tpl->tpl_vars['iCountBlogUsers']->value;?>
):</strong>
			<?php if ($_smarty_tpl->tpl_vars['aBlogUsers']->value){?>
				<?php  $_smarty_tpl->tpl_vars['oBlogUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oBlogUser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aBlogUsers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oBlogUser']->key => $_smarty_tpl->tpl_vars['oBlogUser']->value){
$_smarty_tpl->tpl_vars['oBlogUser']->_loop = true;
?>
					<?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->tpl_vars['oBlogUser']->value->getUser(), null, 0);?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
" class="user"><i class="icon-user"></i><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
</a>
				<?php } ?>
				
				<?php if (count($_smarty_tpl->tpl_vars['aBlogUsers']->value)<$_smarty_tpl->tpl_vars['iCountBlogUsers']->value){?>
					<br /><a href="<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getUrlFull();?>
users/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_user_readers_all'];?>
</a>
				<?php }?>
			<?php }else{ ?>
				<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_user_readers_empty'];?>

			<?php }?>
			<?php echo smarty_function_hook(array('run'=>'blog_info_end','oBlog'=>$_smarty_tpl->tpl_vars['oBlog']->value),$_smarty_tpl);?>

		</footer>
	</div>
	
	<a href="#" class="blog-more" id="blog-more" onclick="return ls.blog.toggleInfo()"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_expand_info'];?>
</a>
</div>

<?php echo smarty_function_hook(array('run'=>'blog_info','oBlog'=>$_smarty_tpl->tpl_vars['oBlog']->value),$_smarty_tpl);?>


<div class="nav-filter-wrapper">
	<ul class="nav nav-filter">
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='good'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['sMenuSubBlogUrl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_collective_good'];?>
</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='new'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['sMenuSubBlogUrl']->value;?>
newall/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_collective_new'];?>
</a><?php if ($_smarty_tpl->tpl_vars['iCountTopicsBlogNew']->value>0){?> <a href="<?php echo $_smarty_tpl->tpl_vars['sMenuSubBlogUrl']->value;?>
new/">+<?php echo $_smarty_tpl->tpl_vars['iCountTopicsBlogNew']->value;?>
</a><?php }?></li>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='discussed'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['sMenuSubBlogUrl']->value;?>
discussed/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_collective_discussed'];?>
</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='top'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['sMenuSubBlogUrl']->value;?>
top/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_collective_top'];?>
</a></li>
		<?php echo smarty_function_hook(array('run'=>'menu_blog_blog_item'),$_smarty_tpl);?>

	</ul>

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
</div>




<?php if ($_smarty_tpl->tpl_vars['bCloseBlog']->value){?>
	<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_close_show'];?>

<?php }else{ ?>
	<?php echo $_smarty_tpl->getSubTemplate ('topic_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>