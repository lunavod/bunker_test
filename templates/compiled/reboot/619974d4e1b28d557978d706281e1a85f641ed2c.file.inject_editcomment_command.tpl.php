<?php /* Smarty version Smarty-3.1.8, created on 2015-10-13 20:05:45
         compiled from "/var/www/html/plugins/editcomment/templates/skin/default/inject_editcomment_command.tpl" */ ?>
<?php /*%%SmartyHeaderCode:835162533561d39e94ed488-34267117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '619974d4e1b28d557978d706281e1a85f641ed2c' => 
    array (
      0 => '/var/www/html/plugins/editcomment/templates/skin/default/inject_editcomment_command.tpl',
      1 => 1363757570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '835162533561d39e94ed488-34267117',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'iCommentId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561d39e94f5410_22302316',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561d39e94f5410_22302316')) {function content_561d39e94f5410_22302316($_smarty_tpl) {?><li><a href="#" class="editcomment_editlink" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['editcomment']['edit_command_title'];?>
" onclick="ls.comments.editComment(<?php echo $_smarty_tpl->tpl_vars['iCommentId']->value;?>
); return false;"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['editcomment']['edit_command_title'];?>
</a></li><?php }} ?>