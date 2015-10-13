<?php /* Smarty version Smarty-3.1.8, created on 2015-10-13 20:05:38
         compiled from "/var/www/html/templates/skin/reboot/topic_part_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1317760644561d39e28de005-45676317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30fb2bae487e61388bcb448be099003caa3d8f35' => 
    array (
      0 => '/var/www/html/templates/skin/reboot/topic_part_header.tpl',
      1 => 1444665005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1317760644561d39e28de005-45676317',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oTopic' => 0,
    'aLang' => 0,
    'bTopicList' => 0,
    'oVote' => 0,
    'oUserCurrent' => 0,
    'oConfig' => 0,
    'bVoteInfoShow' => 0,
    'oUser' => 0,
    'oBlog' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561d39e2965940_00396846',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561d39e2965940_00396846')) {function content_561d39e2965940_00396846($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/html/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/var/www/html/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_date_format')) include '/var/www/html/engine/modules/viewer/plugs/function.date_format.php';
if (!is_callable('smarty_function_cfg')) include '/var/www/html/engine/modules/viewer/plugs/function.cfg.php';
?><?php $_smarty_tpl->tpl_vars["oBlog"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getBlog(), null, 0);?>
<?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getUser(), null, 0);?>
<?php $_smarty_tpl->tpl_vars["oVote"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getVote(), null, 0);?>


<article class="topic topic-type-<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getType();?>
 js-topic">
	<header class="topic-header">
		<h1 class="topic-title word-wrap">
			<?php if ($_smarty_tpl->tpl_vars['oTopic']->value->getPublish()==0){?>   
				<i class="icon-tag" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_unpublish'];?>
"></i>
			<?php }?>
			
			<?php if ($_smarty_tpl->tpl_vars['oTopic']->value->getType()=='link'){?> 
				<i class="icon-share-alt" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_link'];?>
"></i>
			<?php }?>
			
			<?php if ($_smarty_tpl->tpl_vars['bTopicList']->value){?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getUrl();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTopic']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a>
			<?php }else{ ?>
				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTopic']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>

			<?php }?>
		</h1>
		
		
		<?php if ($_smarty_tpl->tpl_vars['oTopic']->value->getType()=='link'){?>
			<div class="topic-url">
				<a href="<?php echo smarty_function_router(array('page'=>'link'),$_smarty_tpl);?>
go/<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
/" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_link_count_jump'];?>
: <?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getLinkCountJump();?>
"><?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getLinkUrl();?>
</a>
			</div>
		<?php }?>
		
		
		<div class="topic-info">
			<div style="display: inline; padding-right: 15px;" id="vote_area_topic_<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
" class="stickyDa vote 
																<?php if ($_smarty_tpl->tpl_vars['oVote']->value||($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oTopic']->value->getUserId()==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId())||strtotime($_smarty_tpl->tpl_vars['oTopic']->value->getDateAdd())<time()-$_smarty_tpl->tpl_vars['oConfig']->value->GetValue('acl.vote.topic.limit_time')){?>
																	<?php if ($_smarty_tpl->tpl_vars['oTopic']->value->getRating()>0){?>
																		vote-count-positive
																	<?php }elseif($_smarty_tpl->tpl_vars['oTopic']->value->getRating()<0){?>
																		vote-count-negative
																	<?php }?>
																<?php }?>
																
																<?php if ($_smarty_tpl->tpl_vars['oVote']->value){?> 
																	voted
																	
																	<?php if ($_smarty_tpl->tpl_vars['oVote']->value->getDirection()>0){?>
																		voted-up
																	<?php }elseif($_smarty_tpl->tpl_vars['oVote']->value->getDirection()<0){?>
																		voted-down
																	<?php }?>
																<?php }?>">
				<?php if ($_smarty_tpl->tpl_vars['oVote']->value||($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oTopic']->value->getUserId()==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId())||strtotime($_smarty_tpl->tpl_vars['oTopic']->value->getDateAdd())<time()-$_smarty_tpl->tpl_vars['oConfig']->value->GetValue('acl.vote.topic.limit_time')){?>
					<?php $_smarty_tpl->tpl_vars["bVoteInfoShow"] = new Smarty_variable(true, null, 0);?>
				<?php }?>
				<div class="vote-up" onclick="return ls.vote.vote(<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
,this,1,'topic');"><i class="fa fa-arrow-up"></i></div>
				<div class="vote-count <?php if ($_smarty_tpl->tpl_vars['bVoteInfoShow']->value){?>js-infobox-vote-topic<?php }?>" id="vote_total_topic_<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_vote_count'];?>
: <?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getCountVote();?>
">
					<?php if ($_smarty_tpl->tpl_vars['bVoteInfoShow']->value){?>
						<?php if ($_smarty_tpl->tpl_vars['oTopic']->value->getRating()>0){?>+<?php }?><?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getRating();?>

					<?php }else{ ?> 
						<a href="#" onclick="return ls.vote.vote(<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
,this,0,'topic');">?</a> 
					<?php }?>
				</div>
				<div class="vote-down" onclick="return ls.vote.vote(<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
,this,-1,'topic');"><i class="fa fa-arrow-down"></i></div>
				<?php if ($_smarty_tpl->tpl_vars['bVoteInfoShow']->value){?>
					<div id="vote-info-topic-<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
" style="display: none;">
						+ <?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getCountVoteUp();?>
<br/>
						- <?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getCountVoteDown();?>
<br/>
						&nbsp; <?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getCountVoteAbstain();?>
<br/>
						<?php echo smarty_function_hook(array('run'=>'topic_show_vote_stats','topic'=>$_smarty_tpl->tpl_vars['oTopic']->value),$_smarty_tpl);?>

					</div>
				<?php }?>
			</div>
			<img width=15 src="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getProfileAvatarPath(24);?>
"><strong><a style="padding-left: 5px;" rel="author" href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
</a></strong> в <a href="<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getUrlFull();?>
" class="topic-blog"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a>
			
			<time datetime="<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oTopic']->value->getDateAdd(),'format'=>'c'),$_smarty_tpl);?>
" title="<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oTopic']->value->getDateAdd(),'format'=>'j F Y, H:i'),$_smarty_tpl);?>
">
				<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oTopic']->value->getDateAdd(),'format'=>"j F Y, H:i"),$_smarty_tpl);?>

			</time>
			
			<ul class="actions">								   
				<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&($_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()==$_smarty_tpl->tpl_vars['oTopic']->value->getUserId()||$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()||$_smarty_tpl->tpl_vars['oBlog']->value->getUserIsAdministrator()||$_smarty_tpl->tpl_vars['oBlog']->value->getUserIsModerator()||$_smarty_tpl->tpl_vars['oBlog']->value->getOwnerId()==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId())){?>
					<li><a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getType();?>
/edit/<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
/" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_edit'];?>
" class="actions-edit"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_edit'];?>
</a></li>
				<?php }?>
				
				<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&($_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()||$_smarty_tpl->tpl_vars['oBlog']->value->getUserIsAdministrator()||$_smarty_tpl->tpl_vars['oBlog']->value->getOwnerId()==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId())){?>
					<li><a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
delete/<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
/?security_ls_key=<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_delete'];?>
" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_delete_confirm'];?>
');" class="actions-delete"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_delete'];?>
</a></li>
				<?php }?>
			</ul>
		</div>
	</header><?php }} ?>