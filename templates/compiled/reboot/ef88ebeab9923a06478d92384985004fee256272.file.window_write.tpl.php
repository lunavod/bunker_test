<?php /* Smarty version Smarty-3.1.8, created on 2015-10-13 20:05:12
         compiled from "/var/www/html/templates/skin/reboot/window_write.tpl" */ ?>
<?php /*%%SmartyHeaderCode:517389729561d39c8528343-90949279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef88ebeab9923a06478d92384985004fee256272' => 
    array (
      0 => '/var/www/html/templates/skin/reboot/window_write.tpl',
      1 => 1444665005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '517389729561d39c8528343-90949279',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'iUserCurrentCountTopicDraft' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561d39c853f942_74147160',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561d39c853f942_74147160')) {function content_561d39c853f942_74147160($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/html/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/var/www/html/engine/modules/viewer/plugs/function.hook.php';
?><div class="modal modal-write" id="modal_write">
	<header class="modal-header">
		<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_create'];?>
</h3>
		<a href="#" class="close jqmClose"></a>
	</header>
	
	<div class="modal-content"><ul class="write-list"><li class="write-item-type-topic"><a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
add" class="write-item-image"></a><a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
add" class="write-item-link"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_create_topic_topic'];?>
</a></li><li class="write-item-type-poll"><a href="<?php echo smarty_function_router(array('page'=>'question'),$_smarty_tpl);?>
add" class="write-item-image"></a><a href="<?php echo smarty_function_router(array('page'=>'question'),$_smarty_tpl);?>
add" class="write-item-link"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_create_topic_question'];?>
</a></li><li class="write-item-type-link"><a href="<?php echo smarty_function_router(array('page'=>'link'),$_smarty_tpl);?>
add" class="write-item-image"></a><a href="<?php echo smarty_function_router(array('page'=>'link'),$_smarty_tpl);?>
add" class="write-item-link"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_create_topic_link'];?>
</a></li><li class="write-item-type-photoset"><a href="<?php echo smarty_function_router(array('page'=>'photoset'),$_smarty_tpl);?>
add" class="write-item-image"></a><a href="<?php echo smarty_function_router(array('page'=>'photoset'),$_smarty_tpl);?>
add" class="write-item-link"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_create_topic_photoset'];?>
</a></li><li class="write-item-type-blog"><a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
add" class="write-item-image"></a><a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
add" class="write-item-link"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_create_blog'];?>
</a></li><li class="write-item-type-draft"><a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
saved/" class="write-item-image"></a><a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
saved/" class="write-item-link"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_menu_saved'];?>
 <?php if ($_smarty_tpl->tpl_vars['iUserCurrentCountTopicDraft']->value){?>(<?php echo $_smarty_tpl->tpl_vars['iUserCurrentCountTopicDraft']->value;?>
)<?php }?></a></li><?php echo smarty_function_hook(array('run'=>'write_item','isPopup'=>true),$_smarty_tpl);?>
</ul></div>
</div>
	<?php }} ?>