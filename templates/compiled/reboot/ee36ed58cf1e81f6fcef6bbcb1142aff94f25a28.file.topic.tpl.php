<?php /* Smarty version Smarty-3.1.8, created on 2015-10-13 20:05:38
         compiled from "/var/www/html/templates/skin/reboot/actions/ActionBlog/topic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:420718558561d39e281f828-36768516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee36ed58cf1e81f6fcef6bbcb1142aff94f25a28' => 
    array (
      0 => '/var/www/html/templates/skin/reboot/actions/ActionBlog/topic.tpl',
      1 => 1444665005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '420718558561d39e281f828-36768516',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oTopic' => 0,
    'aLang' => 0,
    'aPagingCmt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561d39e2836786_00947848',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561d39e2836786_00947848')) {function content_561d39e2836786_00947848($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'blog'), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('topic.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('comment_tree.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('iTargetId'=>$_smarty_tpl->tpl_vars['oTopic']->value->getId(),'iAuthorId'=>$_smarty_tpl->tpl_vars['oTopic']->value->getUserId(),'sAuthorNotice'=>$_smarty_tpl->tpl_vars['aLang']->value['topic_author'],'sTargetType'=>'topic','iCountComment'=>$_smarty_tpl->tpl_vars['oTopic']->value->getCountComment(),'sDateReadLast'=>$_smarty_tpl->tpl_vars['oTopic']->value->getDateRead(),'bAllowNewComment'=>$_smarty_tpl->tpl_vars['oTopic']->value->getForbidComment(),'sNoticeNotAllow'=>$_smarty_tpl->tpl_vars['aLang']->value['topic_comment_notallow'],'sNoticeCommentAdd'=>$_smarty_tpl->tpl_vars['aLang']->value['topic_comment_add'],'bAllowSubscribe'=>true,'oSubscribeComment'=>$_smarty_tpl->tpl_vars['oTopic']->value->getSubscribeNewComment(),'aPagingCmt'=>$_smarty_tpl->tpl_vars['aPagingCmt']->value), 0);?>



<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>