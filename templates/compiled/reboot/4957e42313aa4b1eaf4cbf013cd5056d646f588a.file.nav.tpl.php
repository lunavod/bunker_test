<?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:17:52
         compiled from "/var/www/html/templates/skin/reboot/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:289155898561a99c0bbcd86-99427884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4957e42313aa4b1eaf4cbf013cd5056d646f588a' => 
    array (
      0 => '/var/www/html/templates/skin/reboot/nav.tpl',
      1 => 1443531693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '289155898561a99c0bbcd86-99427884',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sMenuHeadItemSelect' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561a99c0c09683_71471050',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a99c0c09683_71471050')) {function content_561a99c0c09683_71471050($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cfg')) include '/var/www/html/engine/modules/viewer/plugs/function.cfg.php';
if (!is_callable('smarty_function_router')) include '/var/www/html/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/var/www/html/engine/modules/viewer/plugs/function.hook.php';
?><nav id="nav">
	<ul class="nav nav-main">
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuHeadItemSelect']->value=='blog'){?>class="active"<?php }?>><a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_title'];?>
</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuHeadItemSelect']->value=='blogs'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'blogs'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blogs'];?>
</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuHeadItemSelect']->value=='people'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['people'];?>
</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuHeadItemSelect']->value=='stream'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'stream'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_menu'];?>
</a></li>

		<?php echo smarty_function_hook(array('run'=>'main_menu_item'),$_smarty_tpl);?>

		<li class="quote" style="float: left;">
		<a href="#" style="padding-top: 3px; padding-bottom" 0px;>
<img src="http://fc08.deviantart.net/fs70/f/2013/042/3/8/filly_luna_desktop_pony_sit_by_starlyk-d5un8rg.gif" height=47>
</a>
</li>	
	<li class="quote" style="float: left;">
		<a href="#">
		<h1>
		<em>
<?php echo $_smarty_tpl->getSubTemplate ("quote.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</em>
</h1>
</a>
</li>
<li style="float: left;">
		<a href="#"> <p id="nextepisode">Время, оставшееся до новой серии</p>
</a>
		</li>
	</ul>
	<?php echo smarty_function_hook(array('run'=>'main_menu'),$_smarty_tpl);?>

</nav><?php }} ?>