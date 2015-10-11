<?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:17:20
         compiled from "/var/www/html/plugins/aceadminpanel/templates/skin/admin_new/inc.paging.tpl" */ ?>
<?php /*%%SmartyHeaderCode:510417212561a99a0991739-83874996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2817516e0d7a5b44d09883ed4760c6065efae0d1' => 
    array (
      0 => '/var/www/html/plugins/aceadminpanel/templates/skin/admin_new/inc.paging.tpl',
      1 => 1405860042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '510417212561a99a0991739-83874996',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aPaging' => 0,
    'aLang' => 0,
    'iPage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561a99a0a8e707_37317542',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a99a0a8e707_37317542')) {function content_561a99a0a8e707_37317542($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['aPaging']->value&&$_smarty_tpl->tpl_vars['aPaging']->value['iCountPage']>1){?>
<div class="pagination pagination-centered">
    <ul>
        <?php if ($_smarty_tpl->tpl_vars['aPaging']->value['iCurrentPage']>1){?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['sBaseUrl'];?>
/<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['sGetParams'];?>
"
                   title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['paging_first'];?>
">&laquo;</a></li>
        <?php }else{ ?>
            <li class="active"><span>&laquo;</span></li>
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


        <?php if ($_smarty_tpl->tpl_vars['aPaging']->value['iCurrentPage']<$_smarty_tpl->tpl_vars['aPaging']->value['iCountPage']){?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['sBaseUrl'];?>
/page<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['iCountPage'];?>
/<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['sGetParams'];?>
"
                   title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['paging_last'];?>
">&raquo;</a></li>
        <?php }else{ ?>
            <li class="active"><span>&raquo;</span></li>
        <?php }?>
    </ul>
</div>
<?php }?><?php }} ?>