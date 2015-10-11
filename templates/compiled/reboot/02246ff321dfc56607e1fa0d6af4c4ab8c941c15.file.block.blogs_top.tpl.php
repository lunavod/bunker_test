<?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:17:53
         compiled from "/var/www/html/templates/skin/reboot/blocks/block.blogs_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1366880129561a99c18d4df6-54577798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02246ff321dfc56607e1fa0d6af4c4ab8c941c15' => 
    array (
      0 => '/var/www/html/templates/skin/reboot/blocks/block.blogs_top.tpl',
      1 => 1443531693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1366880129561a99c18d4df6-54577798',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aBlogs' => 0,
    'oBlog' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561a99c1911769_02215869',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a99c1911769_02215869')) {function content_561a99c1911769_02215869($_smarty_tpl) {?><ul class="item-list">
	<?php  $_smarty_tpl->tpl_vars['oBlog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oBlog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aBlogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oBlog']->key => $_smarty_tpl->tpl_vars['oBlog']->value){
$_smarty_tpl->tpl_vars['oBlog']->_loop = true;
?>
		<li>
			<a href="<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getUrlFull();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getAvatarPath(48);?>
" alt="avatar" class="avatar" /></a>
			
			<?php if ($_smarty_tpl->tpl_vars['oBlog']->value->getType()=='close'){?><i title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_closed'];?>
" class="icon icon-lock"></i><?php }?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getUrlFull();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a>
			
			<p><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_rating'];?>
: <strong><?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getRating();?>
</strong></p>
		</li>
	<?php } ?>
</ul>				<?php }} ?>