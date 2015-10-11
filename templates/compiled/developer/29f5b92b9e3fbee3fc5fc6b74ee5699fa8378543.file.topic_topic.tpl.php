<?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:26:49
         compiled from "/var/www/html/templates/skin/developer/topic_topic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1015553224561a9bd90f25f5-69725471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29f5b92b9e3fbee3fc5fc6b74ee5699fa8378543' => 
    array (
      0 => '/var/www/html/templates/skin/developer/topic_topic.tpl',
      1 => 1443531693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1015553224561a9bd90f25f5-69725471',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oTopic' => 0,
    'bTopicList' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561a9bd9193722_59213789',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a9bd9193722_59213789')) {function content_561a9bd9193722_59213789($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/html/engine/modules/viewer/plugs/function.hook.php';
?><?php echo $_smarty_tpl->getSubTemplate ('topic_part_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

   
   
<div class="topic-content text">
	<?php echo smarty_function_hook(array('run'=>'topic_content_begin','topic'=>$_smarty_tpl->tpl_vars['oTopic']->value,'bTopicList'=>$_smarty_tpl->tpl_vars['bTopicList']->value),$_smarty_tpl);?>

	
	<?php if ($_smarty_tpl->tpl_vars['bTopicList']->value){?>
		<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getTextShort();?>

		
		<?php if ($_smarty_tpl->tpl_vars['oTopic']->value->getTextShort()!=$_smarty_tpl->tpl_vars['oTopic']->value->getText()){?>
			<br/>
			<a href="<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getUrl();?>
#cut" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_read_more'];?>
">
				<?php if ($_smarty_tpl->tpl_vars['oTopic']->value->getCutText()){?>
					<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getCutText();?>

				<?php }else{ ?>
					<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_read_more'];?>

				<?php }?>
			</a>
		<?php }?>
	<?php }else{ ?>
		<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getText();?>

	<?php }?>
	
	<?php echo smarty_function_hook(array('run'=>'topic_content_end','topic'=>$_smarty_tpl->tpl_vars['oTopic']->value,'bTopicList'=>$_smarty_tpl->tpl_vars['bTopicList']->value),$_smarty_tpl);?>

</div> 


<?php echo $_smarty_tpl->getSubTemplate ('topic_part_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>