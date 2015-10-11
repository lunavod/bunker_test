<?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:18:59
         compiled from "/var/www/html/plugins/aceadminpanel/templates/skin/admin_new/actions/ActionAdmin/banlist_ids.tpl" */ ?>
<?php /*%%SmartyHeaderCode:592101915561a9a035824d5-39554779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e84c100d0d51496ba233e01c7cdf32fd41ccb00d' => 
    array (
      0 => '/var/www/html/plugins/aceadminpanel/templates/skin/admin_new/actions/ActionAdmin/banlist_ids.tpl',
      1 => 1405860042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '592101915561a9a035824d5-39554779',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aUserList' => 0,
    'oLang' => 0,
    'oUser' => 0,
    'oUserCurrent' => 0,
    'oSession' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561a9a0363ce38_94583254',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a9a0363ce38_94583254')) {function content_561a9a0363ce38_94583254($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/html/engine/modules/viewer/plugs/function.router.php';
?><?php if ($_smarty_tpl->tpl_vars['aUserList']->value){?>
<table class="table table-striped table-bordered table-condensed users-list">
    <thead>
    <tr>
        <th>ID</th>
        <th><?php echo $_smarty_tpl->tpl_vars['oLang']->value->user;?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_users_ip_reg;?>
</th>
        <th>Last IP</th>
        <th><?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_ban_upto;?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_ban_comment;?>
</th>
        <th>&nbsp;</th>
    </tr>
    </thead>

    <tbody>
        <?php  $_smarty_tpl->tpl_vars['oUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oUser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aUserList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oUser']->key => $_smarty_tpl->tpl_vars['oUser']->value){
$_smarty_tpl->tpl_vars['oUser']->_loop = true;
?>
        <tr>
            <td class="number"> <?php echo $_smarty_tpl->tpl_vars['oUser']->value->getId();?>
 &nbsp;</td>
            <td <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value->GetId()==$_smarty_tpl->tpl_vars['oUser']->value->getId()){?>style="font-weight:bold;"<?php }?>>
                <i class="icon-user icon-red"></i>
                <a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
users/profile/<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
/"
                   class="link"><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
</a></td>
            <td class="center ip-split">
                <?php echo $_smarty_tpl->tpl_vars['oUser']->value->getIpRegister();?>

            </td>
            <td class="center ip-split">
                <?php $_smarty_tpl->tpl_vars["oSession"] = new Smarty_variable($_smarty_tpl->tpl_vars['oUser']->value->getSession(), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['oSession']->value){?><?php echo $_smarty_tpl->tpl_vars['oSession']->value->getIpLast();?>
<?php }?>
            </td>
            <td class="center"><?php if ($_smarty_tpl->tpl_vars['oUser']->value->getBanLine()){?><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getBanLine();?>
<?php }else{ ?>unlim<?php }?></td>
            <td><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getBanComment();?>
</td>
            <td class="center">
                <a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
banlist/users/del/<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
/?security_ls_key=<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
"
                   class="btn btn-mini" title="<?php echo $_smarty_tpl->tpl_vars['oLang']->value->adm_exclude;?>
"><i class="icon-thumbs-up"></i></a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<?php }else{ ?>
    <?php echo $_smarty_tpl->tpl_vars['oLang']->value->user_empty;?>

<?php }?><?php }} ?>