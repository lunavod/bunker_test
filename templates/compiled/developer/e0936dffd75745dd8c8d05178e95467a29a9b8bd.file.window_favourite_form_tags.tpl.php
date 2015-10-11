<?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:26:48
         compiled from "/var/www/html/templates/skin/developer/window_favourite_form_tags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1460092977561a9bd88ce2f7-83748893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0936dffd75745dd8c8d05178e95467a29a9b8bd' => 
    array (
      0 => '/var/www/html/templates/skin/developer/window_favourite_form_tags.tpl',
      1 => 1443531693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1460092977561a9bd88ce2f7-83748893',
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
  'unifunc' => 'content_561a9bd88e7519_33243430',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a9bd88e7519_33243430')) {function content_561a9bd88e7519_33243430($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
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