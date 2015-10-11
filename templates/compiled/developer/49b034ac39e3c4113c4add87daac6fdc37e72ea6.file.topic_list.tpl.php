<?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:26:49
         compiled from "/var/www/html/templates/skin/developer/topic_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1479370516561a9bd9072821-65373223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49b034ac39e3c4113c4add87daac6fdc37e72ea6' => 
    array (
      0 => '/var/www/html/templates/skin/developer/topic_list.tpl',
      1 => 1443531693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1479370516561a9bd9072821-65373223',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aTopics' => 0,
    'oTopic' => 0,
    'LS' => 0,
    'sTopicTemplateName' => 0,
    'aPaging' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561a9bd90e5c09_15693689',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a9bd90e5c09_15693689')) {function content_561a9bd90e5c09_15693689($_smarty_tpl) {?><?php if (!is_callable('smarty_function_add_block')) include '/var/www/html/engine/modules/viewer/plugs/function.add_block.php';
?><?php if (count($_smarty_tpl->tpl_vars['aTopics']->value)>0){?>
	<?php echo smarty_function_add_block(array('group'=>'toolbar','name'=>'toolbar_topic.tpl','iCountTopic'=>count($_smarty_tpl->tpl_vars['aTopics']->value)),$_smarty_tpl);?>


	<?php  $_smarty_tpl->tpl_vars['oTopic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oTopic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aTopics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oTopic']->key => $_smarty_tpl->tpl_vars['oTopic']->value){
$_smarty_tpl->tpl_vars['oTopic']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['LS']->value->Topic_IsAllowTopicType($_smarty_tpl->tpl_vars['oTopic']->value->getType())){?>
			<?php $_smarty_tpl->tpl_vars["sTopicTemplateName"] = new Smarty_variable("topic_".($_smarty_tpl->tpl_vars['oTopic']->value->getType()).".tpl", null, 0);?>
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['sTopicTemplateName']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('bTopicList'=>true), 0);?>

		<?php }?>
	<?php } ?>

	<?php echo $_smarty_tpl->getSubTemplate ('paging.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('aPaging'=>$_smarty_tpl->tpl_vars['aPaging']->value), 0);?>

<?php }else{ ?>
	<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_no_topic'];?>

<?php }?><?php }} ?>