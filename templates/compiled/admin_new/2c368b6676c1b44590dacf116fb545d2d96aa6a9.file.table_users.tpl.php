<?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:17:20
         compiled from "/var/www/html/plugins/aceadminpanel/templates/skin/admin_new/actions/ActionAdmin/table_users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2050676762561a99a0a98710-83395612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c368b6676c1b44590dacf116fb545d2d96aa6a9' => 
    array (
      0 => '/var/www/html/plugins/aceadminpanel/templates/skin/admin_new/actions/ActionAdmin/table_users.tpl',
      1 => 1405860042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2050676762561a99a0a98710-83395612',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sUserListSort' => 0,
    'sUserListOrder' => 0,
    'oLang' => 0,
    'oConfig' => 0,
    'sMode' => 0,
    'aUserList' => 0,
    'oUser' => 0,
    'oUserCurrent' => 0,
    'classIcon' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
    'oSession' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561a99a0d05de1_23466088',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a99a0d05de1_23466088')) {function content_561a99a0d05de1_23466088($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/html/engine/modules/viewer/plugs/function.router.php';
?><table class="table table-striped table-bordered table-condensed users-list">
    <thead>
    <tr>
        <th>
            <input type="checkbox" id="id_0" onclick="aceAdmin.selectAllUsers(this);"/>
        </th>
        <th>
        <?php if ($_smarty_tpl->tpl_vars['sUserListSort']->value=='id'){?>
            <a href="#" onclick="aceAdmin.sortToggle('id', '<?php echo $_smarty_tpl->tpl_vars['sUserListOrder']->value;?>
'); return false;"><b> id </b></a>
            <?php if ($_smarty_tpl->tpl_vars['sUserListOrder']->value==1){?>
                <div class="adm_sort_asc"></div><?php }else{ ?>
                <div class="adm_sort_desc"></div><?php }?>
            <?php }else{ ?>
            <div class="adm_sort_none"></div>
            <a href="#" onclick="aceAdmin.sortToggle('id'); return false;"> id </a>
        <?php }?>
        </th>
        <th>
        <?php if ($_smarty_tpl->tpl_vars['sUserListSort']->value=='login'){?>
            <a href="#"
               onclick="aceAdmin.sortToggle('login', '<?php echo $_smarty_tpl->tpl_vars['sUserListOrder']->value;?>
'); return false;"><b> <?php echo $_smarty_tpl->tpl_vars['oLang']->value->user;?>
</b></a>
            <?php if ($_smarty_tpl->tpl_vars['sUserListOrder']->value==1){?>
                <div class="adm_sort_asc"></div><?php }else{ ?>
                <div class="adm_sort_desc"></div><?php }?>
            <?php }else{ ?>
            <div class="adm_sort_none"></div>
            <a href="#" onclick="aceAdmin.sortToggle('login'); return false;"> <?php echo $_smarty_tpl->tpl_vars['oLang']->value->user;?>
 </a>
        <?php }?>
        </th>
        <th>
        <?php if ($_smarty_tpl->tpl_vars['sUserListSort']->value=='regdate'){?>
            <a href="#"
               onclick="aceAdmin.sortToggle('regdate', '<?php echo $_smarty_tpl->tpl_vars['sUserListOrder']->value;?>
'); return false;"><b> <?php echo $_smarty_tpl->tpl_vars['oLang']->value->adm_users_date_reg;?>
 </b></a>
            <?php if ($_smarty_tpl->tpl_vars['sUserListOrder']->value==1){?>
                <div class="adm_sort_asc"></div><?php }else{ ?>
                <div class="adm_sort_desc"></div><?php }?>
            <?php }else{ ?>
            <div class="adm_sort_none"></div>
            <a href="#"
               onclick="aceAdmin.sortToggle('regdate'); return false;"> <?php echo $_smarty_tpl->tpl_vars['oLang']->value->adm_users_date_reg;?>
 </a>
        <?php }?>
        </th>
        <th>
        <?php if ($_smarty_tpl->tpl_vars['sUserListSort']->value=='reg_ip'){?>
            <a href="#"
               onclick="aceAdmin.sortToggle('reg_ip', '<?php echo $_smarty_tpl->tpl_vars['sUserListOrder']->value;?>
'); return false;"><b> <?php echo $_smarty_tpl->tpl_vars['oLang']->value->adm_users_ip_reg;?>
 </b></a>
            <?php if ($_smarty_tpl->tpl_vars['sUserListOrder']->value==1){?>
                <div class="adm_sort_asc"></div><?php }else{ ?>
                <div class="adm_sort_desc"></div><?php }?>
            <?php }else{ ?>
            <div class="adm_sort_none"></div>
            <a href="#" onclick="aceAdmin.sortToggle('reg_ip'); return false;"> <?php echo $_smarty_tpl->tpl_vars['oLang']->value->adm_users_ip_reg;?>
 </a>
        <?php }?>
        </th>
        <th>
        <?php if ($_smarty_tpl->tpl_vars['sUserListSort']->value=='email'){?>
            <a href="#" onclick="aceAdmin.sortToggle('email', '<?php echo $_smarty_tpl->tpl_vars['sUserListOrder']->value;?>
'); return false;"><b>
                E-mail </b></a>
            <?php if ($_smarty_tpl->tpl_vars['sUserListOrder']->value==1){?>
                <div class="adm_sort_asc"></div><?php }else{ ?>
                <div class="adm_sort_desc"></div><?php }?>
            <?php }else{ ?>
            <div class="adm_sort_none"></div>
            <a href="#" onclick="aceAdmin.sortToggle('email'); return false;"> E-mail </a>
        <?php }?>
        </th>
    <?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('general.reg.activation')){?>
        <th>
            <?php if ($_smarty_tpl->tpl_vars['sUserListSort']->value=='activated'){?>
                <a href="#"
                   onclick="aceAdmin.sortToggle('activated', '<?php echo $_smarty_tpl->tpl_vars['sUserListOrder']->value;?>
'); return false;"><b> <?php echo $_smarty_tpl->tpl_vars['oLang']->value->adm_users_activated;?>
 </b></a>
                <?php if ($_smarty_tpl->tpl_vars['sUserListOrder']->value==1){?>
                    <div class="adm_sort_asc"></div><?php }else{ ?>
                    <div class="adm_sort_desc"></div><?php }?>
                <?php }else{ ?>
                <div class="adm_sort_none"></div>
                <a href="#"
                   onclick="aceAdmin.sortToggle('activated'); return false;"> <?php echo $_smarty_tpl->tpl_vars['oLang']->value->adm_users_activated;?>
 </a>
            <?php }?>
        </th>
    <?php }?>
        <th>
        <?php if ($_smarty_tpl->tpl_vars['sUserListSort']->value=='last_date'){?>
            <a href="#"
               onclick="aceAdmin.sortToggle('last_date', '<?php echo $_smarty_tpl->tpl_vars['sUserListOrder']->value;?>
'); return false;"><b> <?php echo $_smarty_tpl->tpl_vars['oLang']->value->adm_users_last_activity;?>
 </b></a>
            <?php if ($_smarty_tpl->tpl_vars['sUserListOrder']->value==1){?>
                <div class="adm_sort_asc"></div><?php }else{ ?>
                <div class="adm_sort_desc"></div><?php }?>
            <?php }else{ ?>
            <div class="adm_sort_none"></div>
            <a href="#"
               onclick="aceAdmin.sortToggle('last_date'); return false;"> <?php echo $_smarty_tpl->tpl_vars['oLang']->value->adm_users_last_activity;?>
 </a>
        <?php }?>
        </th>
        <th>
        <?php if ($_smarty_tpl->tpl_vars['sUserListSort']->value=='last_ip'){?>
            <a href="#" onclick="aceAdmin.sortToggle('last_ip', '<?php echo $_smarty_tpl->tpl_vars['sUserListOrder']->value;?>
'); return false;"><b> Last
                IP </b></a>
            <?php if ($_smarty_tpl->tpl_vars['sUserListOrder']->value==1){?>
                <div class="adm_sort_asc"></div><?php }else{ ?>
                <div class="adm_sort_desc"></div><?php }?>
            <?php }else{ ?>
            <div class="adm_sort_none"></div>
            <a href="#" onclick="aceAdmin.sortToggle('last_ip'); return false;"> Last IP </a>
        <?php }?>
        </th>
        <th><?php if ($_smarty_tpl->tpl_vars['sMode']->value!='admins'){?><?php echo $_smarty_tpl->tpl_vars['oLang']->value->adm_users_banned;?>
<?php }else{ ?>&nbsp;<?php }?></th>
    </tr>
    </thead>

    <tbody>
    <?php  $_smarty_tpl->tpl_vars['oUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oUser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aUserList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oUser']->key => $_smarty_tpl->tpl_vars['oUser']->value){
$_smarty_tpl->tpl_vars['oUser']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('general.reg.activation')&&!$_smarty_tpl->tpl_vars['oUser']->value->getDateActivate()){?>
            <?php $_smarty_tpl->tpl_vars['classIcon'] = new Smarty_variable('icon-gray', null, 0);?>
            <?php }elseif($_smarty_tpl->tpl_vars['oUser']->value->IsBannedByLogin()){?>
            <?php $_smarty_tpl->tpl_vars['classIcon'] = new Smarty_variable('icon-red', null, 0);?>
            <?php }elseif($_smarty_tpl->tpl_vars['oUser']->value->isAdministrator()){?>
            <?php $_smarty_tpl->tpl_vars['classIcon'] = new Smarty_variable('icon-green', null, 0);?>
            <?php }else{ ?>
            <?php $_smarty_tpl->tpl_vars['classIcon'] = new Smarty_variable('', null, 0);?>
        <?php }?>
    <tr class="selectable">
        <td class="checkbox">
            <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value->GetId()!=$_smarty_tpl->tpl_vars['oUser']->value->getId()){?>
                <input type="checkbox" id="login_<?php echo $_smarty_tpl->tpl_vars['oUser']->value->GetLogin();?>
" onclick="aceAdmin.user.select()"/>
                <?php }else{ ?>
                &nbsp;
            <?php }?>
        </td>
        <td class="number"> <?php echo $_smarty_tpl->tpl_vars['oUser']->value->getId();?>
 &nbsp;</td>
        <td <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value->GetId()==$_smarty_tpl->tpl_vars['oUser']->value->getId()){?>style="font-weight:bold;"<?php }?>>
            <i class="icon-user <?php echo $_smarty_tpl->tpl_vars['classIcon']->value;?>
"></i>
            <a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
users/profile/<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
/"
               class="link"><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
</a></td>
        <td class="center"><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getDateRegister();?>
</td>
        <td class="center ip-split">
            <?php echo $_smarty_tpl->tpl_vars['oUser']->value->getIpRegister();?>

        </td>
        <td><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserMail();?>
</td>
        <?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('general.reg.activation')){?>
            <td>&nbsp;
                <?php if ($_smarty_tpl->tpl_vars['oUser']->value->getDateActivate()){?><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getDateActivate();?>

                    <?php }else{ ?><a
                        href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
users/activate/<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
/?security_ls_key=<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['oLang']->value->adm_users_activate;?>
</a><?php }?>
            </td>
        <?php }?>
        <td class="center">
            <?php $_smarty_tpl->tpl_vars["oSession"] = new Smarty_variable($_smarty_tpl->tpl_vars['oUser']->value->getSession(), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['oSession']->value){?><?php echo $_smarty_tpl->tpl_vars['oSession']->value->getDateLast();?>
<?php }?>
        </td>
        <td class="center ip-split">
            <?php if ($_smarty_tpl->tpl_vars['oSession']->value){?><?php echo $_smarty_tpl->tpl_vars['oSession']->value->getIpLast();?>
<?php }?>
        </td>
        <?php if ($_smarty_tpl->tpl_vars['sMode']->value=='admins'){?>
            <td class="center">
                <?php if ($_smarty_tpl->tpl_vars['oUser']->value->GetLogin()!='admin'){?>
                    <a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
users/admins/del/?user_login=<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
&security_ls_key=<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
"
                       class="link"><?php echo $_smarty_tpl->tpl_vars['oLang']->value->adm_exclude;?>
</a>&nbsp;
                <?php }?>
            </td>
            <?php }else{ ?>
            <td class="center"><?php if ($_smarty_tpl->tpl_vars['oUser']->value->isBanned()){?><?php if ($_smarty_tpl->tpl_vars['oUser']->value->getBanLine()){?><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getBanLine();?>
<?php }else{ ?>
                unlim<?php }?><?php }?></td>
        <?php }?>
    </tr>
    <?php } ?>
    </tbody>
</table>
<?php }} ?>