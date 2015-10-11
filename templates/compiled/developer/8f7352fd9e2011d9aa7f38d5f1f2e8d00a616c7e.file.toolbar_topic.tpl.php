<?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:26:49
         compiled from "/var/www/html/templates/skin/developer/toolbar_topic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1089961018561a9bd9bd9f77-17103452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f7352fd9e2011d9aa7f38d5f1f2e8d00a616c7e' => 
    array (
      0 => '/var/www/html/templates/skin/developer/toolbar_topic.tpl',
      1 => 1443531693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1089961018561a9bd9bd9f77-17103452',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561a9bd9bf9c58_17909926',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a9bd9bf9c58_17909926')) {function content_561a9bd9bf9c58_17909926($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['params']->value['iCountTopic']){?>
	<section class="toolbar-topic" id="" style="">
		<a href="#" onclick="return ls.toolbar.topic.goPrev();" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['toolbar_topic_prev'];?>
" class="toolbar-topic-prev"><i class="icon-arrow-up"></i></a>
		<a href="#" onclick="return ls.toolbar.topic.goNext();" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['toolbar_topic_next'];?>
" class="toolbar-topic-next"><i class="icon-arrow-down"></i></a>
	</section>
<?php }?>

	
<?php }} ?>