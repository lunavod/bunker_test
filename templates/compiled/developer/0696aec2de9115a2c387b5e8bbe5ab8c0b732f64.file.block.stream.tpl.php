<?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:26:49
         compiled from "/var/www/html/templates/skin/developer/blocks/block.stream.tpl" */ ?>
<?php /*%%SmartyHeaderCode:697327991561a9bd992f3b4-36397119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0696aec2de9115a2c387b5e8bbe5ab8c0b732f64' => 
    array (
      0 => '/var/www/html/templates/skin/developer/blocks/block.stream.tpl',
      1 => 1443531693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '697327991561a9bd992f3b4-36397119',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'sItemsHook' => 0,
    'sStreamComments' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561a9bd99a9b87_54370884',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a9bd99a9b87_54370884')) {function content_561a9bd99a9b87_54370884($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/html/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/var/www/html/engine/modules/viewer/plugs/function.hook.php';
?><section class="block block-type-stream">
	<header class="block-header">
		<h3><a href="<?php echo smarty_function_router(array('page'=>'comments'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_stream_comments_all'];?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_stream'];?>
</a></h3>
		<div class="block-update js-block-stream-update"></div>
	</header>

	<?php echo smarty_function_hook(array('run'=>'block_stream_nav_item','assign'=>"sItemsHook"),$_smarty_tpl);?>

	
	<div class="block-content">
		<ul class="nav nav-pills js-block-stream-nav" <?php if ($_smarty_tpl->tpl_vars['sItemsHook']->value){?>style="display: none;"<?php }?>>
			<li class="active js-block-stream-item" data-type="comment"><a href="#"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_stream_comments'];?>
</a></li>
			<li class="js-block-stream-item" data-type="topic"><a href="#"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_stream_topics'];?>
</a></li>
			<?php echo $_smarty_tpl->tpl_vars['sItemsHook']->value;?>

		</ul>
		
		<ul class="nav nav-pills js-block-stream-dropdown" <?php if (!$_smarty_tpl->tpl_vars['sItemsHook']->value){?>style="display: none;"<?php }?>>
			<li class="dropdown active js-block-stream-dropdown-trigger"><a href="#"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_stream_comments'];?>
</a> <i class="arrow"></i>
				<ul class="dropdown-menu js-block-stream-dropdown-items">
					<li class="active js-block-stream-item" data-type="comment"><a href="#"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_stream_comments'];?>
</a></li>
					<li class="js-block-stream-item" data-type="topic"><a href="#"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_stream_topics'];?>
</a></li>
					<?php echo $_smarty_tpl->tpl_vars['sItemsHook']->value;?>

				</ul>
			</li>
		</ul>
		
		
		<div class="js-block-stream-content">
			<?php echo $_smarty_tpl->tpl_vars['sStreamComments']->value;?>

		</div>
	</div>
</section>

<?php }} ?>