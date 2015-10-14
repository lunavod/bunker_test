<?php /* Smarty version Smarty-3.1.8, created on 2015-10-13 20:05:13
         compiled from "/var/www/html/templates/skin/reboot/actions/ActionProfile/profile_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1209177953561d39c956b139-61432040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '499329045db95f7c96059c7fdf56522e0ed49532' => 
    array (
      0 => '/var/www/html/templates/skin/reboot/actions/ActionProfile/profile_top.tpl',
      1 => 1444665005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1209177953561d39c956b139-61432040',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserProfile' => 0,
    'oVote' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561d39c958fdd7_67769626',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561d39c958fdd7_67769626')) {function content_561d39c958fdd7_67769626($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/html/engine/modules/viewer/plugs/function.hook.php';
?><div class="profile">
	<?php echo smarty_function_hook(array('run'=>'profile_top_begin','oUserProfile'=>$_smarty_tpl->tpl_vars['oUserProfile']->value),$_smarty_tpl);?>

	
	<a href="<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getUserWebPath();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getProfileAvatarPath(48);?>
" alt="avatar" class="avatar" itemprop="photo" /></a>
	
	<div id="vote_area_user_<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getId();?>
" class="vote <?php if ($_smarty_tpl->tpl_vars['oUserProfile']->value->getRating()>=0){?>vote-count-positive<?php }else{ ?>vote-count-negative<?php }?> <?php if ($_smarty_tpl->tpl_vars['oVote']->value){?> voted <?php if ($_smarty_tpl->tpl_vars['oVote']->value->getDirection()>0){?>voted-up<?php }elseif($_smarty_tpl->tpl_vars['oVote']->value->getDirection()<0){?>voted-down<?php }?><?php }?>">
		<div class="vote-label"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_rating'];?>
</div>
		<a href="#" class="vote-up" onclick="return ls.vote.vote(<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getId();?>
,this,1,'user');"></a>
		<a href="#" class="vote-down" onclick="return ls.vote.vote(<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getId();?>
,this,-1,'user');"></a>
		<div id="vote_total_user_<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getId();?>
" class="vote-count count" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_vote_count'];?>
: <?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getCountVote();?>
"><?php if ($_smarty_tpl->tpl_vars['oUserProfile']->value->getRating()>0){?>+<?php }?><?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getRating();?>
</div>
	</div>
	
	<div class="strength">
		<div class="vote-label"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_skill'];?>
</div>
		<div class="count" id="user_skill_<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getSkill();?>
</div>
	</div>
	
	<h2 class="page-header user-login word-wrap <?php if (!$_smarty_tpl->tpl_vars['oUserProfile']->value->getProfileName()){?>no-user-name<?php }?>" itemprop="nickname"><?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getLogin();?>
</h2>
	
	<?php if ($_smarty_tpl->tpl_vars['oUserProfile']->value->getProfileName()){?>
		<p class="user-name" itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oUserProfile']->value->getProfileName(), ENT_QUOTES, 'UTF-8', true);?>
</p>
	<?php }?>
	
	<?php echo smarty_function_hook(array('run'=>'profile_top_end','oUserProfile'=>$_smarty_tpl->tpl_vars['oUserProfile']->value),$_smarty_tpl);?>

</div><?php }} ?>