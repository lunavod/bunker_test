<?php /* Smarty version Smarty-3.1.8, created on 2015-10-13 20:05:26
         compiled from "/var/www/html/templates/skin/reboot/menu.create.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1786806856561d39d6a45ff1-52205984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa8b6ded6aef9d83acff55c0bb17ad959f1cb82c' => 
    array (
      0 => '/var/www/html/templates/skin/reboot/menu.create.tpl',
      1 => 1444665005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1786806856561d39d6a45ff1-52205984',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'sMenuItemSelect' => 0,
    'iUserCurrentCountTopicDraft' => 0,
    'sMenuSubItemSelect' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561d39d6a74db1_86663038',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561d39d6a74db1_86663038')) {function content_561d39d6a74db1_86663038($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/html/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_router')) include '/var/www/html/engine/modules/viewer/plugs/function.router.php';
?><script type="text/javascript">
	jQuery(function($){
		var trigger = $('#dropdown-create-trigger');
		var menu 	= $('#dropdown-create-menu');
		var pos 	= trigger.position();
	
	
		// Dropdown
		menu.css({ 'left': pos.left - 5 });
	
		trigger.click(function(){
			menu.slideToggle(); 
			return false;
		});
		
		
		// Hide menu
		$(document).click(function(){
			menu.slideUp();
		});
	
		$('body').on("click", "#dropdown-create-trigger, #dropdown-create-menu", function(e) {
			e.stopPropagation();
		});
	});
</script>


<div class="dropdown-create">
	<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_create'];?>
 <a href="#" class="dropdown-create-trigger link-dashed" id="dropdown-create-trigger"><?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='topic'){?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_menu_add'];?>
<?php }elseif($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='blog'){?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_create'];?>
<?php }else{ ?><?php echo smarty_function_hook(array('run'=>'menu_create_item_select','sMenuItemSelect'=>$_smarty_tpl->tpl_vars['sMenuItemSelect']->value),$_smarty_tpl);?>
<?php }?></a></h2>
	
	<ul class="dropdown-menu" id="dropdown-create-menu" style="display: none">
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='topic'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
add/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_menu_add'];?>
</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='blog'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
add/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_create'];?>
</a></li>
		<?php echo smarty_function_hook(array('run'=>'menu_create_item','sMenuItemSelect'=>$_smarty_tpl->tpl_vars['sMenuItemSelect']->value),$_smarty_tpl);?>

	</ul>
</div>


<?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='topic'){?>
	<?php if ($_smarty_tpl->tpl_vars['iUserCurrentCountTopicDraft']->value){?>
		<a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
saved/" class="drafts"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_menu_saved'];?>
 (<?php echo $_smarty_tpl->tpl_vars['iUserCurrentCountTopicDraft']->value;?>
)</a>
	<?php }?>
	<ul class="nav nav-pills mb-30">
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='topic'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
add/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_menu_add_topic'];?>
</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='question'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'question'),$_smarty_tpl);?>
add/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_menu_add_question'];?>
</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='link'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'link'),$_smarty_tpl);?>
add/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_menu_add_link'];?>
</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='photoset'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'photoset'),$_smarty_tpl);?>
add/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_menu_add_photoset'];?>
</a></li>
		<?php echo smarty_function_hook(array('run'=>'menu_create_topic_item'),$_smarty_tpl);?>

	</ul>
<?php }?>


<?php echo smarty_function_hook(array('run'=>'menu_create','sMenuItemSelect'=>$_smarty_tpl->tpl_vars['sMenuItemSelect']->value,'sMenuSubItemSelect'=>$_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value),$_smarty_tpl);?>
<?php }} ?>