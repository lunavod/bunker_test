<?php /* Smarty version Smarty-3.1.8, created on 2015-10-13 20:05:38
         compiled from "/var/www/html/templates/skin/reboot/topic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1078774598561d39e28ba533-81853440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3261b92f75a4a7f3b0f3eeb9907ccde587b0b3ea' => 
    array (
      0 => '/var/www/html/templates/skin/reboot/topic.tpl',
      1 => 1444665005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1078774598561d39e28ba533-81853440',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oTopic' => 0,
    'LS' => 0,
    'sTopicTemplateName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561d39e28c2642_38598451',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561d39e28c2642_38598451')) {function content_561d39e28c2642_38598451($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['LS']->value->Topic_IsAllowTopicType($_smarty_tpl->tpl_vars['oTopic']->value->getType())){?>
	<?php $_smarty_tpl->tpl_vars["sTopicTemplateName"] = new Smarty_variable("topic_".($_smarty_tpl->tpl_vars['oTopic']->value->getType()).".tpl", null, 0);?>
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['sTopicTemplateName']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?><?php }} ?>