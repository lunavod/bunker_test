<?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:26:49
         compiled from "/var/www/html/templates/skin/developer/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1957186578561a9bd984d222-46888634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6929aa9fab4a91f09082ee4225a171f8d41451fc' => 
    array (
      0 => '/var/www/html/templates/skin/developer/footer.tpl',
      1 => 1443531693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1957186578561a9bd984d222-46888634',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'noSidebar' => 0,
    'sidebarPosition' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561a9bd9886f49_26717193',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a9bd9886f49_26717193')) {function content_561a9bd9886f49_26717193($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/html/engine/modules/viewer/plugs/function.hook.php';
?>			<?php echo smarty_function_hook(array('run'=>'content_end'),$_smarty_tpl);?>

		</div> <!-- /content -->

		
		<?php if (!$_smarty_tpl->tpl_vars['noSidebar']->value&&$_smarty_tpl->tpl_vars['sidebarPosition']->value!='left'){?>
			<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }?>
	</div> <!-- /wrapper -->

	
	<footer id="footer">
		<div class="copyright">
			<?php echo smarty_function_hook(array('run'=>'copyright'),$_smarty_tpl);?>

		</div>
		
		Автор шаблона &mdash; <a href="http://deniart.ru">deniart</a>
		
		<?php echo smarty_function_hook(array('run'=>'footer_end'),$_smarty_tpl);?>

	</footer>

</div> <!-- /container -->

<?php echo $_smarty_tpl->getSubTemplate ('toolbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo smarty_function_hook(array('run'=>'body_end'),$_smarty_tpl);?>


</body>
</html><?php }} ?>