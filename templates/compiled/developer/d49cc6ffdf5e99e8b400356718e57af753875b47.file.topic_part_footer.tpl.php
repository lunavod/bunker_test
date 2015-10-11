<?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:26:49
         compiled from "/var/www/html/templates/skin/developer/topic_part_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:999204074561a9bd9378136-23504696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd49cc6ffdf5e99e8b400356718e57af753875b47' => 
    array (
      0 => '/var/www/html/templates/skin/developer/topic_part_footer.tpl',
      1 => 1443531693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '999204074561a9bd9378136-23504696',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oTopic' => 0,
    'aLang' => 0,
    'sTag' => 0,
    'oUserCurrent' => 0,
    'oFavourite' => 0,
    'bTopicList' => 0,
    'oVote' => 0,
    'oConfig' => 0,
    'bVoteInfoShow' => 0,
    'oUser' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561a9bd9720b35_84491975',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a9bd9720b35_84491975')) {function content_561a9bd9720b35_84491975($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/html/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_block_hookb')) include '/var/www/html/engine/modules/viewer/plugs/block.hookb.php';
if (!is_callable('smarty_function_hook')) include '/var/www/html/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_modifier_declension')) include '/var/www/html/engine/modules/viewer/plugs/modifier.declension.php';
?>	<?php $_smarty_tpl->tpl_vars["oBlog"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getBlog(), null, 0);?>
	<?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getUser(), null, 0);?>
	<?php $_smarty_tpl->tpl_vars["oVote"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getVote(), null, 0);?>
	<?php $_smarty_tpl->tpl_vars["oFavourite"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getFavourite(), null, 0);?>


	<footer class="topic-footer">
		<ul class="topic-tags js-favourite-insert-after-form js-favourite-tags-topic-<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
">
			<li><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_tags'];?>
:</li>
			
			<?php if ($_smarty_tpl->tpl_vars['oTopic']->value->getTagsArray()){?><?php  $_smarty_tpl->tpl_vars['sTag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sTag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['oTopic']->value->getTagsArray(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['sTag']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['sTag']->key => $_smarty_tpl->tpl_vars['sTag']->value){
$_smarty_tpl->tpl_vars['sTag']->_loop = true;
 $_smarty_tpl->tpl_vars['sTag']->index++;
 $_smarty_tpl->tpl_vars['sTag']->first = $_smarty_tpl->tpl_vars['sTag']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tags_list']['first'] = $_smarty_tpl->tpl_vars['sTag']->first;
?><li><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['tags_list']['first']){?>, <?php }?><a rel="tag" href="<?php echo smarty_function_router(array('page'=>'tag'),$_smarty_tpl);?>
<?php echo rawurlencode($_smarty_tpl->tpl_vars['sTag']->value);?>
/"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sTag']->value, ENT_QUOTES, 'UTF-8', true);?>
</a></li><?php } ?><?php }else{ ?><li><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_tags_empty'];?>
</li><?php }?><?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?><?php if ($_smarty_tpl->tpl_vars['oFavourite']->value){?><?php  $_smarty_tpl->tpl_vars['sTag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sTag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['oFavourite']->value->getTagsArray(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sTag']->key => $_smarty_tpl->tpl_vars['sTag']->value){
$_smarty_tpl->tpl_vars['sTag']->_loop = true;
?><li class="topic-tags-user js-favourite-tag-user">, <a rel="tag" href="<?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath();?>
favourites/topics/tag/<?php echo rawurlencode($_smarty_tpl->tpl_vars['sTag']->value);?>
/"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sTag']->value, ENT_QUOTES, 'UTF-8', true);?>
</a></li><?php } ?><?php }?><li class="topic-tags-edit js-favourite-tag-edit" <?php if (!$_smarty_tpl->tpl_vars['oFavourite']->value){?>style="display:none;"<?php }?>><a href="#" onclick="return ls.favourite.showEditTags(<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
,'topic',this);" class="link-dotted"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['favourite_form_tags_button_show'];?>
</a></li><?php }?>
		</ul>
		
		
		<div class="topic-share" id="topic_share_<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('hookb', array('run'=>"topic_share",'topic'=>$_smarty_tpl->tpl_vars['oTopic']->value,'bTopicList'=>$_smarty_tpl->tpl_vars['bTopicList']->value)); $_block_repeat=true; echo smarty_block_hookb(array('run'=>"topic_share",'topic'=>$_smarty_tpl->tpl_vars['oTopic']->value,'bTopicList'=>$_smarty_tpl->tpl_vars['bTopicList']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<div class="yashare-auto-init" data-yashareTitle="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTopic']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
" data-yashareLink="<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getUrl();?>
" data-yashareL10n="ru" data-yashareType="button" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir,lj,gplus"></div>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hookb(array('run'=>"topic_share",'topic'=>$_smarty_tpl->tpl_vars['oTopic']->value,'bTopicList'=>$_smarty_tpl->tpl_vars['bTopicList']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div>


		<ul class="topic-info">
			<li id="vote_area_topic_<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
" class="vote 
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
,this,1,'topic');"></div>
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
,this,-1,'topic');"></div>
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
			</li>

			<li class="topic-info-author"><a rel="author" href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
</a></li>
			<li class="topic-info-favourite">
				<div onclick="return ls.favourite.toggle(<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
,this,'topic');" class="favourite <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oTopic']->value->getIsFavourite()){?>active<?php }?>"></div>
				<span class="favourite-count" id="fav_count_topic_<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getCountFavourite();?>
</span>
			</li>
			<li class="topic-info-share"><a href="#" class="icon-share" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_share'];?>
" onclick="jQuery('#topic_share_<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
').slideToggle(); return false;"></a></li>
			
			<?php if ($_smarty_tpl->tpl_vars['bTopicList']->value){?>
				<li class="topic-info-comments">
					<a href="<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getUrl();?>
#comments" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_comment_read'];?>
"><?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getCountComment();?>
 <?php echo smarty_modifier_declension($_smarty_tpl->tpl_vars['oTopic']->value->getCountComment(),$_smarty_tpl->tpl_vars['aLang']->value['comment_declension'],'russian');?>
</a>
					<?php if ($_smarty_tpl->tpl_vars['oTopic']->value->getCountCommentNew()){?><span>+<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getCountCommentNew();?>
</span><?php }?>
				</li>
			<?php }?>
			
			<?php echo smarty_function_hook(array('run'=>'topic_show_info','topic'=>$_smarty_tpl->tpl_vars['oTopic']->value),$_smarty_tpl);?>

		</ul>

		
		<?php if (!$_smarty_tpl->tpl_vars['bTopicList']->value){?>
			<?php echo smarty_function_hook(array('run'=>'topic_show_end','topic'=>$_smarty_tpl->tpl_vars['oTopic']->value),$_smarty_tpl);?>

		<?php }?>
	</footer>
</article> <!-- /.topic --><?php }} ?>