<?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:17:52
         compiled from "/var/www/html/templates/skin/reboot/window_favourite_form_tags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1103678952561a99c0b9fc71-81634106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce8b82e27dc5a2ef6548c9117aa1e7070a724fc9' => 
    array (
      0 => '/var/www/html/templates/skin/reboot/window_favourite_form_tags.tpl',
      1 => 1443531693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1103678952561a99c0b9fc71-81634106',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561a99c0bb47a2_88067603',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a99c0bb47a2_88067603')) {function content_561a99c0bb47a2_88067603($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
	<div id="favourite-form-tags" class="modal">
		<header class="modal-header">
			<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['add_favourite_tags'];?>
</h3>
			<a href="#" class="close jqmClose"></a>
		</header>
		
		
		<form onsubmit="return ls.favourite.saveTags(this);" class="modal-content">
			<input type="hidden" name="target_type" value="" id="favourite-form-tags-target-type">
			<input type="hidden" name="target_id" value="" id="favourite-form-tags-target-id">

			<p><input type="text" name="tags" value="" id="favourite-form-tags-tags" class="autocomplete-tags-sep input-text input-width-full"></p>
			<button type="submit" name="" class="button button-primary" /><?php echo $_smarty_tpl->tpl_vars['aLang']->value['favourite_form_tags_button_save'];?>
</button>
			<button type="submit" name="" class="button jqmClose" /><?php echo $_smarty_tpl->tpl_vars['aLang']->value['favourite_form_tags_button_cancel'];?>
</button>
		</form>
	</div>
<?php }?><?php }} ?>