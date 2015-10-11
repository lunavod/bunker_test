<?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:20:49
         compiled from "/var/www/html/plugins/aceadminpanel/templates/skin/admin_new/actions/ActionAdmin/invites_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:800350796561a9a713608e0-62505048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '420357404648deab1952d311c1446f3e2b223f2c' => 
    array (
      0 => '/var/www/html/plugins/aceadminpanel/templates/skin/admin_new/actions/ActionAdmin/invites_list.tpl',
      1 => 1405860042,
      2 => 'file',
    ),
    'cbdcca04e75f1e3a7d0ff654f38feda1c57ddb2f' => 
    array (
      0 => '/var/www/html/templates/skin/reboot/paging.tpl',
      1 => 1443531693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '800350796561a9a713608e0-62505048',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sMode' => 0,
    'iCount' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
    'aInvites' => 0,
    'sInviteSort' => 0,
    'sInviteOrder' => 0,
    'oLang' => 0,
    'className' => 0,
    'aInvite' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561a9a71643b08_29326476',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a9a71643b08_29326476')) {function content_561a9a71643b08_29326476($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/html/engine/modules/viewer/plugs/function.router.php';
?><ul class="nav nav-tabs">
    <li class="nav-tabs-add">
        <a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
invites/new/"><i class="icon-plus-sign"></i></a>
    </li>
    <li <?php if ($_smarty_tpl->tpl_vars['sMode']->value=='list'||$_smarty_tpl->tpl_vars['sMode']->value==''){?>class="active"<?php }?>>
        <a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
invites/list/">All invites <span class="badge"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['iCount']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
</span></a>
    </li>
</ul>


<script type="text/javascript">
aceAdmin.sort = function(sort, order) {
  $('#invite_sort').val(sort);
  $('#invite_order').val(order);
  $('#admin_form_invite_list').submit();
}
</script>


<form method="post" action="" id="admin_form_invite_list">
    <input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
" />

<?php if ($_smarty_tpl->tpl_vars['aInvites']->value){?>
<?php /*  Call merged included template "paging.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('paging.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '800350796561a9a713608e0-62505048');
content_561a9a7138a0f6_95141265($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "paging.tpl" */?>
<table class="table table-striped table-bordered table-condensed invites-list">
    <tr>
        <th>&nbsp;</th>
        <th>
            <?php if ($_smarty_tpl->tpl_vars['sInviteSort']->value=='id'){?>
            <a href="#" onclick="aceAdmin.sort('id', <?php if ($_smarty_tpl->tpl_vars['sInviteOrder']->value==1){?>2<?php }else{ ?>1<?php }?>); return false;"><b> id </b></a>
            <b><?php if ($_smarty_tpl->tpl_vars['sInviteOrder']->value==1){?>&darr;<?php }else{ ?>&uarr;<?php }?></b>
            <?php }else{ ?>
            <a href="#" onclick="aceAdmin.sort('id', 1); return false;"> id </a>
            <?php }?>
        </th>
        <th>
            <?php if ($_smarty_tpl->tpl_vars['sInviteSort']->value=='code'){?>
            <a href="#" onclick="aceAdmin.sort('code', <?php if ($_smarty_tpl->tpl_vars['sInviteOrder']->value==1){?>2<?php }else{ ?>1<?php }?>); return false;"><b> <?php echo $_smarty_tpl->tpl_vars['oLang']->value->adm_invite_code;?>
</b></a>
            <b><?php if ($_smarty_tpl->tpl_vars['sInviteOrder']->value==1){?>&darr;<?php }else{ ?>&uarr;<?php }?></b>
            <?php }else{ ?>
            <a href="#" onclick="aceAdmin.sort('code', 1); return false;"> <?php echo $_smarty_tpl->tpl_vars['oLang']->value->adm_invite_code;?>
 </a>
            <?php }?>
        </th>
        <th>
            <?php if ($_smarty_tpl->tpl_vars['sInviteSort']->value=='user_from'){?>
            <a href="#" onclick="aceAdmin.sort('user_from', <?php if ($_smarty_tpl->tpl_vars['sInviteOrder']->value==1){?>2<?php }else{ ?>1<?php }?>); return false;"><b> <?php echo $_smarty_tpl->tpl_vars['oLang']->value->adm_invite_user_from;?>
 </b></a>
            <b><?php if ($_smarty_tpl->tpl_vars['sInviteOrder']->value==1){?>&darr;<?php }else{ ?>&uarr;<?php }?></b>
            <?php }else{ ?>
            <a href="#" onclick="aceAdmin.sort('user_from', 1); return false;"> <?php echo $_smarty_tpl->tpl_vars['oLang']->value->adm_invite_user_from;?>
 </a>
            <?php }?>
        </th>
        <th>
            <?php if ($_smarty_tpl->tpl_vars['sInviteSort']->value=='date_add'){?>
            <a href="#" onclick="aceAdmin.sort('date_add', <?php if ($_smarty_tpl->tpl_vars['sInviteOrder']->value==1){?>2<?php }else{ ?>1<?php }?>); return false;"><b> <?php echo $_smarty_tpl->tpl_vars['oLang']->value->adm_invite_date_add;?>
 </b></a>
            <b><?php if ($_smarty_tpl->tpl_vars['sInviteOrder']->value==1){?>&darr;<?php }else{ ?>&uarr;<?php }?></b>
            <?php }else{ ?>
            <a href="#" onclick="aceAdmin.sort('date_add', 1); return false;"> <?php echo $_smarty_tpl->tpl_vars['oLang']->value->adm_invite_date_add;?>
 </a>
            <?php }?>
        </th>
        <th>
            <?php if ($_smarty_tpl->tpl_vars['sInviteSort']->value=='user_to'){?>
            <a href="#" onclick="aceAdmin.sort('user_to', <?php if ($_smarty_tpl->tpl_vars['sInviteOrder']->value==1){?>2<?php }else{ ?>1<?php }?>); return false;"><b> <?php echo $_smarty_tpl->tpl_vars['oLang']->value->adm_invite_user_to;?>
 </b></a>
            <b><?php if ($_smarty_tpl->tpl_vars['sInviteOrder']->value==1){?>&darr;<?php }else{ ?>&uarr;<?php }?></b>
            <?php }else{ ?>
            <a href="#" onclick="aceAdmin.sort('user_to', 1); return false;"> <?php echo $_smarty_tpl->tpl_vars['oLang']->value->adm_invite_user_to;?>
 </a>
            <?php }?>
        </th>
        <th>
            <?php if ($_smarty_tpl->tpl_vars['sInviteSort']->value=='date_used'){?>
            <a href="#" onclick="aceAdmin.sort('date_used', <?php if ($_smarty_tpl->tpl_vars['sInviteOrder']->value==1){?>2<?php }else{ ?>1<?php }?>); return false;"><b> <?php echo $_smarty_tpl->tpl_vars['oLang']->value->adm_invite_date_used;?>
 </b></a>
            <b><?php if ($_smarty_tpl->tpl_vars['sInviteOrder']->value==1){?>&darr;<?php }else{ ?>&uarr;<?php }?></b>
            <?php }else{ ?>
            <a href="#" onclick="aceAdmin.sort('date_used', 1); return false;"> <?php echo $_smarty_tpl->tpl_vars['oLang']->value->adm_invite_date_used;?>
 </a>
            <?php }?>
        </th>
    </tr>

    <?php  $_smarty_tpl->tpl_vars['aInvite'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aInvite']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aInvites']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aInvite']->key => $_smarty_tpl->tpl_vars['aInvite']->value){
$_smarty_tpl->tpl_vars['aInvite']->_loop = true;
?>
    <tr class="<?php echo $_smarty_tpl->tpl_vars['className']->value;?>
">
        <td>
            <input type="checkbox" name="invite_<?php echo $_smarty_tpl->tpl_vars['aInvite']->value['invite_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['aInvite']->value['invite_date_used']){?>disabled="disabled"<?php }?>/>
        </td>
        <td> <?php echo $_smarty_tpl->tpl_vars['aInvite']->value['invite_id'];?>
 &nbsp;</td>
        <td> <?php echo $_smarty_tpl->tpl_vars['aInvite']->value['invite_code'];?>
 &nbsp;</td>
        <td>
            <a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
users/profile/<?php echo $_smarty_tpl->tpl_vars['aInvite']->value['from_login'];?>
/" class="link"><?php echo $_smarty_tpl->tpl_vars['aInvite']->value['from_login'];?>
</a>
        </td>
        <td class="center;"><?php echo $_smarty_tpl->tpl_vars['aInvite']->value['invite_date_add'];?>
</td>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['aInvite']->value['to_login']){?>
            <a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
users/profile/<?php echo $_smarty_tpl->tpl_vars['aInvite']->value['to_login'];?>
/" class="link"><?php echo $_smarty_tpl->tpl_vars['aInvite']->value['to_login'];?>
</a>
            <?php }else{ ?>
            &nbsp;
            <?php }?>
        </td>
        <td style="text-align:center;">
            <?php if ($_smarty_tpl->tpl_vars['aInvite']->value['invite_date_used']){?>
            <?php echo $_smarty_tpl->tpl_vars['aInvite']->value['invite_date_used'];?>

            <?php }else{ ?>
            &nbsp;
            <?php }?>
        </td>
    </tr>
    <?php } ?>
</table>
<div style="display:none;">
        <input type="hidden" name="invite_sort" id="invite_sort" />
        <input type="hidden" name="invite_order" id="invite_order" />
</div>
    <input type="hidden" name="action" value="delete" />
    <button class="btn btn-danger" name="btn-delete" style="float: right;">Delete</button>
<?php /*  Call merged included template "paging.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('paging.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '800350796561a9a713608e0-62505048');
content_561a9a7138a0f6_95141265($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "paging.tpl" */?>
<?php }else{ ?>
    <?php echo $_smarty_tpl->tpl_vars['oLang']->value->user_empty;?>

<?php }?>
</form>
<?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:20:49
         compiled from "/var/www/html/templates/skin/reboot/paging.tpl" */ ?>
<?php if ($_valid && !is_callable('content_561a9a7138a0f6_95141265')) {function content_561a9a7138a0f6_95141265($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['aPaging']->value&&$_smarty_tpl->tpl_vars['aPaging']->value['iCountPage']>1){?> 
	<div class="pagination">
		<ul>
			<?php if ($_smarty_tpl->tpl_vars['aPaging']->value['iCurrentPage']>1){?><li><a href="<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['sBaseUrl'];?>
/<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['sGetParams'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['paging_first'];?>
"><<</a></li><?php }?>
			
			
			<?php if ($_smarty_tpl->tpl_vars['aPaging']->value['iPrevPage']){?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['sBaseUrl'];?>
/page<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['iPrevPage'];?>
/<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['sGetParams'];?>
" class="js-paging-prev-page" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['paging_previos'];?>
"><</a></li>
			<?php }?>
			
			
			<?php  $_smarty_tpl->tpl_vars['iPage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['iPage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aPaging']->value['aPagesLeft']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['iPage']->key => $_smarty_tpl->tpl_vars['iPage']->value){
$_smarty_tpl->tpl_vars['iPage']->_loop = true;
?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['sBaseUrl'];?>
/page<?php echo $_smarty_tpl->tpl_vars['iPage']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['sGetParams'];?>
"><?php echo $_smarty_tpl->tpl_vars['iPage']->value;?>
</a></li>
			<?php } ?>
			
			<li class="active"><span><?php echo $_smarty_tpl->tpl_vars['aPaging']->value['iCurrentPage'];?>
</span></li>
			
			<?php  $_smarty_tpl->tpl_vars['iPage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['iPage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aPaging']->value['aPagesRight']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['iPage']->key => $_smarty_tpl->tpl_vars['iPage']->value){
$_smarty_tpl->tpl_vars['iPage']->_loop = true;
?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['sBaseUrl'];?>
/page<?php echo $_smarty_tpl->tpl_vars['iPage']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['sGetParams'];?>
"><?php echo $_smarty_tpl->tpl_vars['iPage']->value;?>
</a></li>
			<?php } ?>
			
			
			<?php if ($_smarty_tpl->tpl_vars['aPaging']->value['iNextPage']){?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['sBaseUrl'];?>
/page<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['iNextPage'];?>
/<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['sGetParams'];?>
" class="js-paging-next-page" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['paging_next'];?>
">></a></li>
			<?php }?>
			
			
			<?php if ($_smarty_tpl->tpl_vars['aPaging']->value['iCurrentPage']<$_smarty_tpl->tpl_vars['aPaging']->value['iCountPage']){?><li><a href="<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['sBaseUrl'];?>
/page<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['iCountPage'];?>
/<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['sGetParams'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['paging_last'];?>
">>></a></li><?php }?>					
		</ul>
	</div>
<?php }?><?php }} ?>