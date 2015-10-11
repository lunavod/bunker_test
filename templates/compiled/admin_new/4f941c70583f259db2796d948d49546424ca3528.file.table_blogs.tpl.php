<?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:20:39
         compiled from "/var/www/html/plugins/aceadminpanel/templates/skin/admin_new/actions/ActionAdmin/table_blogs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2042328729561a9a6787fc07-69479373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f941c70583f259db2796d948d49546424ca3528' => 
    array (
      0 => '/var/www/html/plugins/aceadminpanel/templates/skin/admin_new/actions/ActionAdmin/table_blogs.tpl',
      1 => 1405860042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2042328729561a9a6787fc07-69479373',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aBlogs' => 0,
    'aBlog' => 0,
    'oLang' => 0,
    'sBlogTitle' => 0,
    'ls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561a9a67929614_05868878',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a9a67929614_05868878')) {function content_561a9a67929614_05868878($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/html/engine/modules/viewer/plugs/function.router.php';
?><table class="table table-striped table-bordered table-condensed">
    <thead>
    <tr>
        <th width="40px">&nbsp;</th>
        <th width="50px">Blog ID</th>
        <th>User</th>
        <th>Title</th>
        <th>Date</th>
        <th>Type</th>
        <th>Users</th>
        <th>Votes</th>
        <th>Rating</th>
        <th></th>
    </tr>
    </thead>

    <tbody>
    <?php  $_smarty_tpl->tpl_vars['aBlog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aBlog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aBlogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aBlog']->key => $_smarty_tpl->tpl_vars['aBlog']->value){
$_smarty_tpl->tpl_vars['aBlog']->_loop = true;
?>
        <?php $_smarty_tpl->tpl_vars['sBlogTitle'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['aBlog']->value['blog_title'], ENT_QUOTES, 'UTF-8', true), null, 0);?>
    <tr>
        <td class="name">
            <?php if ($_smarty_tpl->tpl_vars['aBlog']->value['blog_type']=='personal'){?>
                <i class="icon-pencil icon-gray opacity50"></i>
            <?php }else{ ?>
                <a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
edit/<?php echo $_smarty_tpl->tpl_vars['aBlog']->value['blog_id'];?>
/" title="<?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_blog_edit;?>
">
                    <i class="icon-pencil"></i></a>
            <?php }?>
            <a href="#" title="<?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_blog_delete;?>
" onclick="$ace.blog.del('<?php echo $_smarty_tpl->tpl_vars['oLang']->value->Get('adm_blog_del_confirm',"blog=>".($_smarty_tpl->tpl_vars['sBlogTitle']->value));?>
','<?php echo $_smarty_tpl->tpl_vars['sBlogTitle']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['aBlog']->value['blog_id'];?>
'); return false;">
                <i class="icon-remove"></i></a>
        </td>
        <td class="number"><?php echo $_smarty_tpl->tpl_vars['aBlog']->value['blog_id'];?>
</td>
        <td>
            <a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
users/profile/<?php echo $_smarty_tpl->tpl_vars['aBlog']->value['user_login'];?>
"><?php echo $_smarty_tpl->tpl_vars['aBlog']->value['user_login'];?>
</a>
        </td>
        <td class="name">
            <a href="<?php echo $_smarty_tpl->tpl_vars['aBlog']->value['blog_url_full'];?>
"><?php echo $_smarty_tpl->tpl_vars['sBlogTitle']->value;?>
</a>
        </td>
        <td class="center"><?php echo $_smarty_tpl->tpl_vars['aBlog']->value['blog_date_add'];?>
</td>
        <td class="center"><?php if ($_smarty_tpl->tpl_vars['aBlog']->value['blog_type']!='personal'){?><b><?php }?><?php echo $_smarty_tpl->tpl_vars['aBlog']->value['blog_type'];?>
<?php if ($_smarty_tpl->tpl_vars['aBlog']->value['blog_type']!='personal'){?></b><?php }?></td>
        <td class="number"><?php echo $_smarty_tpl->tpl_vars['aBlog']->value['blog_count_user'];?>
</td>
        <td class="number"><?php echo $_smarty_tpl->tpl_vars['aBlog']->value['blog_count_vote'];?>
</td>
        <td class="number"><?php echo $_smarty_tpl->tpl_vars['aBlog']->value['blog_rating'];?>
</td>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['ls']->value['plugin']['aceblogextender']){?>
            <?php if ($_smarty_tpl->tpl_vars['aBlog']->value['blog_premoderation']){?>
                <i class="icon icon-warning-sign" title="<?php echo $_smarty_tpl->tpl_vars['oLang']->value->_mblog_premoderation;?>
" rel="tooltip"></i>
            <?php }else{ ?>
                <i class="icon icon-empty"></i>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['aBlog']->value['attach_allow']){?><i class="icon icon-tags" title="<?php echo $_smarty_tpl->tpl_vars['oLang']->value->_mblog_attach_allow_notice;?>
" rel="tooltip"><?php }?>
            <?php }?>
        </td>
    </tr>
    <?php } ?>
    </tbody>
</table>
<?php }} ?>