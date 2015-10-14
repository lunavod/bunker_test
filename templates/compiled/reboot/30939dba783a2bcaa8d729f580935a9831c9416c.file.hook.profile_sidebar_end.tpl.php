<?php /* Smarty version Smarty-3.1.8, created on 2015-10-13 20:05:13
         compiled from "/var/www/html/plugins/aceadminpanel/templates/skin/default/hook.profile_sidebar_end.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1682150612561d39c955f104-45717158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30939dba783a2bcaa8d729f580935a9831c9416c' => 
    array (
      0 => '/var/www/html/plugins/aceadminpanel/templates/skin/default/hook.profile_sidebar_end.tpl',
      1 => 1444665230,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1682150612561d39c955f104-45717158',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'oUserProfile' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561d39c95675c2_81137331',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561d39c95675c2_81137331')) {function content_561d39c95675c2_81137331($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/html/engine/modules/viewer/plugs/function.router.php';
?><?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
<section class="block block-type-profile-nav">
    <ul class="nav nav-profile">
        <li><a href="<?php echo smarty_function_router(array('page'=>"admin"),$_smarty_tpl);?>
users/profile/<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getLogin();?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['aceadminpanel']['adm_user_profile_link'];?>
</a></li>
    </ul>
</section>
<?php }?><?php }} ?>