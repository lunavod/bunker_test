<?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:17:53
         compiled from "/var/www/html/templates/skin/reboot/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1589777706561a99c16f4ba9-92630229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '541fcbdfc2e28be22d1d2bd48b205d1f41bf3c51' => 
    array (
      0 => '/var/www/html/templates/skin/reboot/footer.tpl',
      1 => 1443531693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1589777706561a99c16f4ba9-92630229',
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
  'unifunc' => 'content_561a99c171da23_44120692',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a99c171da23_44120692')) {function content_561a99c171da23_44120692($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/html/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_cfg')) include '/var/www/html/engine/modules/viewer/plugs/function.cfg.php';
?>			<?php echo smarty_function_hook(array('run'=>'content_end'),$_smarty_tpl);?>

		</div> <!-- /content -->

		
		<?php if (!$_smarty_tpl->tpl_vars['noSidebar']->value&&$_smarty_tpl->tpl_vars['sidebarPosition']->value!='left'){?>
			<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }?>
	</div> <!-- /wrapper -->

	
	<footer id="footer">
		
		Пони. Пони захватывают мир.


	</footer>
</div> <!-- /container -->

<?php echo $_smarty_tpl->getSubTemplate ('toolbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script src="<?php echo smarty_function_cfg(array('name'=>"path.static.skin"),$_smarty_tpl);?>
/js/clock.js">
<?php echo smarty_function_hook(array('run'=>'body_end'),$_smarty_tpl);?>

<script>
var allNew = document.querySelectorAll('.spoiler-title');
console.log(allNew)
idx=0
for(idx=0;idx<allNew.length;idx++){	
	allNew[idx].className="spoiler-title spoiler-close" 
}

var despoil = function() {
	var allBody = document.querySelectorAll('.spoiler-body');
	idx=0
	for(idx=0;idx<allBody.length;idx++){	
		allBody[idx].style.display="block" 
	}
	var allNew = document.querySelectorAll('.spoiler-title');
	idx=0
	for(idx=0;idx<allNew.length;idx++){	
		allNew[idx].className="spoiler-title spoiler-open" 
	}
}

var spoil = function() {
	var allBody = document.querySelectorAll('.spoiler-body');
	idx=0
	for(idx=0;idx<allBody.length;idx++){	
		allBody[idx].style.display="none" 
	}
	var allNew = document.querySelectorAll('.spoiler-title');
	idx=0
	for(idx=0;idx<allNew.length;idx++){	
		allNew[idx].className="spoiler-title spoiler-close" 
	}
}
</script>
</body>
</html><?php }} ?>