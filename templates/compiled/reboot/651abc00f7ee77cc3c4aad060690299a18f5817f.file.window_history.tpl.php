<?php /* Smarty version Smarty-3.1.8, created on 2015-10-13 20:05:38
         compiled from "/var/www/html/plugins/editcomment/templates/skin/default/window_history.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1805110466561d39e2a91ea5-61444486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '651abc00f7ee77cc3c4aad060690299a18f5817f' => 
    array (
      0 => '/var/www/html/plugins/editcomment/templates/skin/default/window_history.tpl',
      1 => 1363757570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1805110466561d39e2a91ea5-61444486',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561d39e2a966c7_70578854',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561d39e2a966c7_70578854')) {function content_561d39e2a966c7_70578854($_smarty_tpl) {?><div class="modal editcomment-history" id="modal-editcomment-history">
	<header class="modal-header">
	    <h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['editcomment']['history_window_title'];?>
</h3>
		<a href="#" class="close jqmClose"></a>
	</header>
	
	<div class="modal-content history-content"><div id='editcomment-history-content'></div></div>
</div>
<script type="text/javascript">
jQuery(document).ready(function($){
    $('#modal-editcomment-history').jqm();
    $(document).keydown( function( e ) {
   if( e.which == 27) {  // escape, close box
     $('#modal-editcomment-history').jqmHide();
   }
 });
});
</script>

<?php }} ?>