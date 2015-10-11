<?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:19:01
         compiled from "/var/www/html/plugins/aceadminpanel/templates/skin/admin_new/actions/ActionAdmin/banlist_ips.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171400546561a9a0554cb23-18583722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1190e8afa37084cd9801841fc2f8049875948f5' => 
    array (
      0 => '/var/www/html/plugins/aceadminpanel/templates/skin/admin_new/actions/ActionAdmin/banlist_ips.tpl',
      1 => 1405860042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171400546561a9a0554cb23-18583722',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aIpList' => 0,
    'oLang' => 0,
    'aIp' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561a9a0560d7b5_48975424',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a9a0560d7b5_48975424')) {function content_561a9a0560d7b5_48975424($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/html/engine/modules/viewer/plugs/function.router.php';
?><?php if ($_smarty_tpl->tpl_vars['aIpList']->value){?>
<table class="table table-striped table-bordered table-condensed ips-list">
    <thead>
    <tr>
        <th>&nbsp;</th>
        <th>IP</th>
        <th><?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_users_banned;?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_ban_upto;?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_ban_comment;?>
</th>
        <th>&nbsp;</th>
    </tr>
    </thead>

    <tbody>
    <?php  $_smarty_tpl->tpl_vars['aIp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aIp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aIpList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aIp']->key => $_smarty_tpl->tpl_vars['aIp']->value){
$_smarty_tpl->tpl_vars['aIp']->_loop = true;
?>
    <tr>
        <td class="number"><?php echo $_smarty_tpl->tpl_vars['aIp']->value['id'];?>
</td>
        <td class="center"><?php echo $_smarty_tpl->tpl_vars['aIp']->value['ip1'];?>
 - <?php echo $_smarty_tpl->tpl_vars['aIp']->value['ip2'];?>
</td>
        <td class="center"><?php echo $_smarty_tpl->tpl_vars['aIp']->value['bandate'];?>
</td>
        <td class="center"><?php if ($_smarty_tpl->tpl_vars['aIp']->value['banunlim']){?>unlim<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['aIp']->value['banline'];?>
<?php }?></td>
        <td class="center"><?php echo $_smarty_tpl->tpl_vars['aIp']->value['bancomment'];?>
</td>
        <td class="center">
            <a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
banlist/ips/del/<?php echo $_smarty_tpl->tpl_vars['aIp']->value['id'];?>
/?security_ls_key=<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
"
               class="btn btn-mini" title="<?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_exclude;?>
"><i class="icon-thumbs-up"></i></a>
        </td>
    </tr>
    <?php } ?>
    </tbody>
</table>
<?php }else{ ?>
    <?php echo $_smarty_tpl->tpl_vars['oLang']->value->user_empty;?>

<?php }?>
<?php }} ?>