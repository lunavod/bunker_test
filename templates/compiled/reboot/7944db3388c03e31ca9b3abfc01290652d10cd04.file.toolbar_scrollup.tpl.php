<?php /* Smarty version Smarty-3.1.8, created on 2015-10-13 20:05:12
         compiled from "/var/www/html/templates/skin/reboot/toolbar_scrollup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150570533561d39c85a0307-78109932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7944db3388c03e31ca9b3abfc01290652d10cd04' => 
    array (
      0 => '/var/www/html/templates/skin/reboot/toolbar_scrollup.tpl',
      1 => 1444665005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150570533561d39c85a0307-78109932',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561d39c85a36c0_02156979',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561d39c85a36c0_02156979')) {function content_561d39c85a36c0_02156979($_smarty_tpl) {?><section class="toolbar-up" id="toolbar_up">
	<a href="#" style="margin-top: 30px;" onclick="$.scrollTo(0, 500); return false;" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['toolbar_scrollup_go'];?>
" class="toolbar-topic-prev"><i class="fa fa-chevron-up"></i></a>
</section>
<section class="toolbar-down" id="toolbar_down">
	<a href="#" onclick="$('html, body').animate({scrollTop:$(document).height()}, 'slow');  return false;" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['toolbar_scrollup_go'];?>
" class="toolbar-topic-prev"><i class="fa fa-chevron-down"></i></a>
</section>
<?php }} ?>