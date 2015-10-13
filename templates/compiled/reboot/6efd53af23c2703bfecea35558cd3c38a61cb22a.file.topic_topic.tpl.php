<?php /* Smarty version Smarty-3.1.8, created on 2015-10-13 20:05:38
         compiled from "/var/www/html/templates/skin/reboot/topic_topic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2141303878561d39e28c3f97-75015649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6efd53af23c2703bfecea35558cd3c38a61cb22a' => 
    array (
      0 => '/var/www/html/templates/skin/reboot/topic_topic.tpl',
      1 => 1444665005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2141303878561d39e28c3f97-75015649',
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
  'unifunc' => 'content_561d39e28dbdd6_47943196',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561d39e28dbdd6_47943196')) {function content_561d39e28dbdd6_47943196($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/html/engine/modules/viewer/plugs/function.hook.php';
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