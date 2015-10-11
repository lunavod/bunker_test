<?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:26:48
         compiled from "/var/www/html/templates/skin/developer/system_message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:491355104561a9bd8f3bc18-09226591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2d0e49da689e05112df43d59718560fbe5fb48f' => 
    array (
      0 => '/var/www/html/templates/skin/developer/system_message.tpl',
      1 => 1443531693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '491355104561a9bd8f3bc18-09226591',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'noShowSystemMessage' => 0,
    'aMsgError' => 0,
    'aMsg' => 0,
    'aMsgNotice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561a9bd90695b5_17048483',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a9bd90695b5_17048483')) {function content_561a9bd90695b5_17048483($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['noShowSystemMessage']->value){?>
	<?php if ($_smarty_tpl->tpl_vars['aMsgError']->value){?>
		<ul class="system-message-error">
			<?php  $_smarty_tpl->tpl_vars['aMsg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aMsg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aMsgError']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aMsg']->key => $_smarty_tpl->tpl_vars['aMsg']->value){
$_smarty_tpl->tpl_vars['aMsg']->_loop = true;
?>
				<li>
					<?php if ($_smarty_tpl->tpl_vars['aMsg']->value['title']!=''){?>
						<strong><?php echo $_smarty_tpl->tpl_vars['aMsg']->value['title'];?>
</strong>:
					<?php }?>
					<?php echo $_smarty_tpl->tpl_vars['aMsg']->value['msg'];?>

				</li>
			<?php } ?>
		</ul>
	<?php }?>


	<?php if ($_smarty_tpl->tpl_vars['aMsgNotice']->value){?>
		<ul class="system-message-notice">
			<?php  $_smarty_tpl->tpl_vars['aMsg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aMsg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aMsgNotice']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aMsg']->key => $_smarty_tpl->tpl_vars['aMsg']->value){
$_smarty_tpl->tpl_vars['aMsg']->_loop = true;
?>
				<li>
					<?php if ($_smarty_tpl->tpl_vars['aMsg']->value['title']!=''){?>
						<strong><?php echo $_smarty_tpl->tpl_vars['aMsg']->value['title'];?>
</strong>:
					<?php }?>
					<?php echo $_smarty_tpl->tpl_vars['aMsg']->value['msg'];?>

				</li>
			<?php } ?>
		</ul>
	<?php }?>
<?php }?><?php }} ?>