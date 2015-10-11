<?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:29:32
         compiled from "/var/www/html/plugins/aceadminpanel/templates/skin/admin_new/actions/ActionAdmin/invites_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2048147295561a9c7c800eb9-02894604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '417a5e2751b0c58652122d5b88b8daa3317b7610' => 
    array (
      0 => '/var/www/html/plugins/aceadminpanel/templates/skin/admin_new/actions/ActionAdmin/invites_new.tpl',
      1 => 1405860042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2048147295561a9c7c800eb9-02894604',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aNewInviteList' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
    'oLang' => 0,
    'iCountInviteAvailable' => 0,
    'aLang' => 0,
    'iCountInviteUsed' => 0,
    'sInviteMode' => 0,
    'iInviteCount' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561a9c7c9a1767_65629097',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a9c7c9a1767_65629097')) {function content_561a9c7c9a1767_65629097($_smarty_tpl) {?>
<script type="text/javascript">
var aceAdmin = aceAdmin || { }

aceAdmin.inviteMode = function (mode) {
  if (mode=='mail') {
    $('#div_invite_mail').show();
    $('#div_invite_text').hide();
  } else {
    $('#div_invite_mail').hide();
    $('#div_invite_text').show();
  }
}

aceAdmin.inviteSubmit = function (msg1, msg2) {
  if ($('#adm_invite_mode_mail').prop("checked")) {
    if (!$('#invite_mail').val()) {
      alert(msg1);
      return false;
    }
  }
  if ($('#adm_invite_mode_text').prop("checked")) {
    if (parseInt($('#invite_count').val())<=0) {
      alert(msg2);
      return false;
    }
  }
  return true;
}
</script>


<?php if (!$_smarty_tpl->tpl_vars['aNewInviteList']->value){?>
<form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
" />
    <p>
    <?php echo $_smarty_tpl->tpl_vars['oLang']->value->settings_invite_available;?>
: <strong><?php if ($_smarty_tpl->tpl_vars['iCountInviteAvailable']->value==-1){?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_invite_many'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['iCountInviteAvailable']->value;?>
<?php }?></strong><br />
    <?php echo $_smarty_tpl->tpl_vars['oLang']->value->settings_invite_used;?>
: <strong><?php echo $_smarty_tpl->tpl_vars['iCountInviteUsed']->value;?>
</strong>
    </p>
    <p>
        <label class="radio">
        <input type="radio" name="adm_invite_mode" id="adm_invite_mode_mail" value="mail" <?php if ($_smarty_tpl->tpl_vars['sInviteMode']->value=='mail'){?>checked<?php }?> onclick="aceAdmin.inviteMode('mail');" />
         <?php echo $_smarty_tpl->tpl_vars['oLang']->value->adm_invite_mode_mail;?>
</label>

        <label class="radio">
        <input type="radio" name="adm_invite_mode" id="adm_invite_mode_text" value="text" <?php if ($_smarty_tpl->tpl_vars['sInviteMode']->value=='text'){?>checked<?php }?> onclick="aceAdmin.inviteMode('text');" />
        <?php echo $_smarty_tpl->tpl_vars['oLang']->value->adm_invite_mode_text;?>
</label>
    </p>
    <div id="div_invite_mail" <?php if ($_smarty_tpl->tpl_vars['sInviteMode']->value=='text'){?>style="display:none;"<?php }?>>
         <label for="invite_mail"><?php echo $_smarty_tpl->tpl_vars['oLang']->value->adm_send_invite_mail;?>
:</label><br />
        <textarea name="invite_mail" id="invite_mail" class="w300"></textarea><br />
    </div>
    <div id="div_invite_text" <?php if ($_smarty_tpl->tpl_vars['sInviteMode']->value=='mail'){?>style="display:none;"<?php }?>>
         <label for="invite_count"><?php echo $_smarty_tpl->tpl_vars['oLang']->value->adm_make_invite_text;?>
:</label><br />
        <input type="text" name="invite_count" id="invite_count" class="w100" style="text-align:right;" value="<?php echo $_smarty_tpl->tpl_vars['iInviteCount']->value;?>
" /><br />
    </div>
    <br/>
    <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['oLang']->value->adm_invite_submit;?>
" name="adm_invite_submit"
           class="btn btn-primary"
           onclick="return aceAdmin.inviteSubmit('<?php echo $_smarty_tpl->tpl_vars['oLang']->value->adm_invaite_mail_empty;?>
', '<?php echo $_smarty_tpl->tpl_vars['oLang']->value->adm_invaite_text_empty;?>
');" />
</form>
<?php }else{ ?>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aNewInviteList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 : <?php echo $_smarty_tpl->tpl_vars['item']->value;?>
<br/>
<?php } ?>
<form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
" />
    <input type="hidden" name="adm_invite_mode" value="<?php echo $_smarty_tpl->tpl_vars['sInviteMode']->value;?>
" />
    <input type="hidden" name="invite_count" value="<?php echo $_smarty_tpl->tpl_vars['iInviteCount']->value;?>
" /><br />
    <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['oLang']->value->adm_continue;?>
" class="btn btn-primary" />
</form>
<?php }?><?php }} ?>