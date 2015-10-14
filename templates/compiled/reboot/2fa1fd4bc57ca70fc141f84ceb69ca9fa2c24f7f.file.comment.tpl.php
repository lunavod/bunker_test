<?php /* Smarty version Smarty-3.1.8, created on 2015-10-14 14:12:00
         compiled from "/var/www/html/templates/skin/reboot/comment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:444961864561d39e9463168-62024725%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fa1fd4bc57ca70fc141f84ceb69ca9fa2c24f7f' => 
    array (
      0 => '/var/www/html/templates/skin/reboot/comment.tpl',
      1 => 1444821112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '444961864561d39e9463168-62024725',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561d39e94e5312_13450234',
  'variables' => 
  array (
    'oComment' => 0,
    'oUserCurrent' => 0,
    'sDateReadLast' => 0,
    'bOneComment' => 0,
    'oUser' => 0,
    'iAuthorId' => 0,
    'sAuthorNotice' => 0,
    'aLang' => 0,
    'oConfig' => 0,
    'bNoCommentFavourites' => 0,
    'bAllowNewComment' => 0,
    'oVote' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561d39e94e5312_13450234')) {function content_561d39e94e5312_13450234($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/html/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_date_format')) include '/var/www/html/engine/modules/viewer/plugs/function.date_format.php';
if (!is_callable('smarty_function_hook')) include '/var/www/html/engine/modules/viewer/plugs/function.hook.php';
?><?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->tpl_vars['oComment']->value->getUser(), null, 0);?>
<?php $_smarty_tpl->tpl_vars["oVote"] = new Smarty_variable($_smarty_tpl->tpl_vars['oComment']->value->getVote(), null, 0);?>
<?php $_smarty_tpl->tpl_vars["oId"] = new Smarty_variable($_smarty_tpl->tpl_vars['oComment']->value->getTarget(), null, 0);?>

<section id="comment_id_<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
" class="comment
														<?php if ($_smarty_tpl->tpl_vars['oComment']->value->isBad()){?>
															comment-bad
														<?php }?>

														<?php if ($_smarty_tpl->tpl_vars['oComment']->value->getDelete()){?>
															comment-deleted
														<?php }elseif($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oComment']->value->getUserId()==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()){?>
															comment-self
														<?php }elseif($_smarty_tpl->tpl_vars['sDateReadLast']->value<=$_smarty_tpl->tpl_vars['oComment']->value->getDate()){?>
															comment-new
														<?php }?>
														">
	<?php if (!$_smarty_tpl->tpl_vars['oComment']->value->getDelete()||$_smarty_tpl->tpl_vars['bOneComment']->value||($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator())){?>
		<a name="comment<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
"></a>


		<a href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getProfileAvatarPath(48);?>
" alt="avatar" class="comment-avatar" /></a>


		<ul class="comment-info">
			<li class="comment-author">
				<?php if ($_smarty_tpl->tpl_vars['iAuthorId']->value==$_smarty_tpl->tpl_vars['oUser']->value->getId()){?><span class="comment-topic-author" title="<?php if ($_smarty_tpl->tpl_vars['sAuthorNotice']->value){?><?php echo $_smarty_tpl->tpl_vars['sAuthorNotice']->value;?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['comment_target_author'];?>
</span><?php }?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
</a>
			</li>
			<li class="comment-date">
				<a href="<?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('module.comment.nested_per_page')){?><?php echo smarty_function_router(array('page'=>'comments'),$_smarty_tpl);?>
<?php }else{ ?>#comment<?php }?><?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
" class="link-dotted" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['comment_url_notice'];?>
">
					<time datetime="<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oComment']->value->getDate(),'format'=>'c'),$_smarty_tpl);?>
"><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oComment']->value->getDate(),'hours_back'=>"12",'minutes_back'=>"60",'now'=>"60",'day'=>"day H:i",'format'=>"j F Y, H:i"),$_smarty_tpl);?>
</time>
				</a>
			</li>

			<?php if ($_smarty_tpl->tpl_vars['oComment']->value->getPid()){?>
				<li class="goto-comment-parent"><a href="#" onclick="ls.comments.goToParentComment(<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
,<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getPid();?>
); return false;" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['comment_goto_parent'];?>
">↑</a></li>
			<?php }?>
			<li class="goto-comment-child"><a href="#" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['comment_goto_child'];?>
">↓</a></li>




			<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&!$_smarty_tpl->tpl_vars['bNoCommentFavourites']->value){?>
				<li class="comment-favourite">
					<div onclick="return ls.favourite.toggle(<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
,this,'comment');" class="favourite <?php if ($_smarty_tpl->tpl_vars['oComment']->value->getIsFavourite()){?>active<?php }?>"><i class="favourite-icon fa fa-heart"></i></div>
					<span class="favourite-count" id="fav_count_comment_<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
"><?php if ($_smarty_tpl->tpl_vars['oComment']->value->getCountFavourite()>0){?><?php echo $_smarty_tpl->tpl_vars['oComment']->value->getCountFavourite();?>
<?php }?></span>
				</li>
			<?php }?>
		</ul>


		<div id="comment_content_id_<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
" class="comment-content text">
			<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getText();?>

		</div>


		<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
			<ul class="comment-actions">
				<?php if (!$_smarty_tpl->tpl_vars['oComment']->value->getDelete()&&!$_smarty_tpl->tpl_vars['bAllowNewComment']->value){?>
					<li><a href="#" onclick="ls.comments.toggleCommentForm(<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
); return false;" class="reply-link link-dotted"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['comment_answer'];?>
</a></li>
				<?php }?>

				<?php if (!$_smarty_tpl->tpl_vars['oComment']->value->getDelete()&&$_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
					<li><a href="#" class="comment-delete link-dotted" onclick="ls.comments.toggle(this,<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
); return false;"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['comment_delete'];?>
</a></li>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['oComment']->value->getDelete()&&$_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
					<li><a href="#" class="comment-repair link-dotted" onclick="ls.comments.toggle(this,<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
); return false;"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['comment_repair'];?>
</a></li>
				<?php }?>

				<?php echo smarty_function_hook(array('run'=>'comment_action','comment'=>$_smarty_tpl->tpl_vars['oComment']->value),$_smarty_tpl);?>

				<?php if ($_smarty_tpl->tpl_vars['oComment']->value->getTargetType()!='talk'){?>
				<li style="margin-right: 0px;" id="vote_area_comment_<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
" class="comment-vote vote
																		<?php if ($_smarty_tpl->tpl_vars['oComment']->value->getRating()>0){?>
																			vote-count-positive
																		<?php }elseif($_smarty_tpl->tpl_vars['oComment']->value->getRating()<0){?>
																			vote-count-negative
																		<?php }?>

																		<?php if ($_smarty_tpl->tpl_vars['oVote']->value){?>
																			voted

																			<?php if ($_smarty_tpl->tpl_vars['oVote']->value->getDirection()>0){?>
																				voted-up
																			<?php }else{ ?>
																				voted-down
																			<?php }?>
																		<?php }?>">
					<div class="vote-down" onclick="return ls.vote.vote(<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
,this,-1,'comment');"><i class="fa fa-arrow-down"></i></div>
					<span class="vote-count" id="vote_total_comment_<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
"><?php if ($_smarty_tpl->tpl_vars['oComment']->value->getRating()>0){?>+<?php }?><?php echo $_smarty_tpl->tpl_vars['oComment']->value->getRating();?>
</span>
					<div class="vote-up" onclick="return ls.vote.vote(<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
,this,1,'comment');"><i class="fa fa-arrow-up"></i></div>
				</li>
			<?php }?>
			</ul>
		<?php }?>
	<?php }else{ ?>
		<?php echo $_smarty_tpl->tpl_vars['aLang']->value['comment_was_delete'];?>

	<?php }?>
</section><?php }} ?>