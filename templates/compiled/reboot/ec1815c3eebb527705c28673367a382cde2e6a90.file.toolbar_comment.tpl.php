<?php /* Smarty version Smarty-3.1.8, created on 2015-10-13 20:05:38
         compiled from "/var/www/html/templates/skin/reboot/toolbar_comment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:915726460561d39e2b839a9-70779702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec1815c3eebb527705c28673367a382cde2e6a90' => 
    array (
      0 => '/var/www/html/templates/skin/reboot/toolbar_comment.tpl',
      1 => 1444665005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '915726460561d39e2b839a9-70779702',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'params' => 0,
    'aPagingCmt' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561d39e2b929c0_57522464',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561d39e2b929c0_57522464')) {function content_561d39e2b929c0_57522464($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
	<?php $_smarty_tpl->tpl_vars['aPagingCmt'] = new Smarty_variable($_smarty_tpl->tpl_vars['params']->value['aPagingCmt'], null, 0);?>
	<section class="toolbar-update" id="update" style="<?php if ($_smarty_tpl->tpl_vars['aPagingCmt']->value&&$_smarty_tpl->tpl_vars['aPagingCmt']->value['iCountPage']>1){?>display: none;<?php }?>">
		<a href="#" class="update-comments" onclick="ls.comments.load(<?php echo $_smarty_tpl->tpl_vars['params']->value['iTargetId'];?>
,'<?php echo $_smarty_tpl->tpl_vars['params']->value['sTargetType'];?>
'); return false;"><i id="update-comments" class="fa fa-refresh"></i></a>
		<a href="#" class="new-comments" id="new_comments_counter" style="display: none;" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['comment_count_new'];?>
" onclick="ls.comments.goToNextComment(); return false;"></a>

		<input type="hidden" id="comment_last_id" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['iMaxIdComment'];?>
" />
		<input type="hidden" id="comment_use_paging" value="<?php if ($_smarty_tpl->tpl_vars['aPagingCmt']->value&&$_smarty_tpl->tpl_vars['aPagingCmt']->value['iCountPage']>1){?>1<?php }?>" />
	</section>
<?php }?>
	
<?php }} ?>