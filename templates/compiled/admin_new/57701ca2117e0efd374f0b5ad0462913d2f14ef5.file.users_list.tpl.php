<?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:17:20
         compiled from "/var/www/html/plugins/aceadminpanel/templates/skin/admin_new/actions/ActionAdmin/users_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1044010254561a99a02fbf25-83101960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57701ca2117e0efd374f0b5ad0462913d2f14ef5' => 
    array (
      0 => '/var/www/html/plugins/aceadminpanel/templates/skin/admin_new/actions/ActionAdmin/users_list.tpl',
      1 => 1405860042,
      2 => 'file',
    ),
    'bc2ee99c3d0e17147dd88891ad6624ff7eb92501' => 
    array (
      0 => '/var/www/html/plugins/aceadminpanel/templates/skin/admin_new/actions/ActionAdmin/users.tpl',
      1 => 1405860042,
      2 => 'file',
    ),
    '376022bffe023817ae2029d5698f9fb26c1dcb69' => 
    array (
      0 => '/var/www/html/plugins/aceadminpanel/templates/skin/admin_new/index.tpl',
      1 => 1405860042,
      2 => 'file',
    ),
    '244345fd45a4383ddef510725c964cf6b51f50f8' => 
    array (
      0 => '/var/www/html/plugins/aceadminpanel/templates/skin/admin_new/inc.system_message.tpl',
      1 => 1405860042,
      2 => 'file',
    ),
    '3a8cc94cac846cbfe533b9d388e4719a093f6367' => 
    array (
      0 => '/var/www/html/templates/skin/reboot/blocks.tpl',
      1 => 1443531693,
      2 => 'file',
    ),
    '069dca838ad508f0943ff87b7c7dd01ea4037b82' => 
    array (
      0 => '/var/www/html/templates/skin/reboot/toolbar.tpl',
      1 => 1443531693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1044010254561a99a02fbf25-83101960',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sHtmlTitle' => 0,
    'sHtmlDescription' => 0,
    'sHtmlKeywords' => 0,
    'aHtmlHeadFiles' => 0,
    'aHtmlRssAlternate' => 0,
    'sHtmlCanonical' => 0,
    'bRefreshToHome' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
    '_sPhpSessionId' => 0,
    'oConfig' => 0,
    'aRouter' => 0,
    'sPage' => 0,
    'sPath' => 0,
    'aLangJs' => 0,
    'body_classes' => 0,
    'oUserCurrent' => 0,
    'sWebPluginSkin' => 0,
    'sAdminTitle' => 0,
    'oLang' => 0,
    'aLang' => 0,
    'sAction' => 0,
    'sEvent' => 0,
    'tpl_content' => 0,
    'tpl_include' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561a99a0938eb5_70627427',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a99a0938eb5_70627427')) {function content_561a99a0938eb5_70627427($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/html/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_cfg')) include '/var/www/html/engine/modules/viewer/plugs/function.cfg.php';
if (!is_callable('smarty_function_router')) include '/var/www/html/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_json')) include '/var/www/html/engine/modules/viewer/plugs/function.json.php';
if (!is_callable('smarty_function_add_block')) include '/var/www/html/engine/modules/viewer/plugs/function.add_block.php';
?><!doctype html>

<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="ru"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="ru"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="ru"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="ru"> <!--<![endif]-->

<head>
<?php echo smarty_function_hook(array('run'=>'html_head_begin'),$_smarty_tpl);?>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php echo $_smarty_tpl->tpl_vars['sHtmlTitle']->value;?>
</title>

    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['sHtmlDescription']->value;?>
">
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['sHtmlKeywords']->value;?>
">

    <meta name="viewport" content="width=device-width,initial-scale=1">

<?php echo $_smarty_tpl->tpl_vars['aHtmlHeadFiles']->value['css'];?>


    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=latin,cyrillic' rel='stylesheet'
          type='text/css'>

    <link href="<?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/images/favicon.ico?v1" rel="shortcut icon"/>
    <link rel="search" type="application/opensearchdescription+xml" href="<?php echo smarty_function_router(array('page'=>'search'),$_smarty_tpl);?>
opensearch/"
          title="<?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
"/>

<?php if ($_smarty_tpl->tpl_vars['aHtmlRssAlternate']->value){?>
    <link rel="alternate" type="application/rss+xml" href="<?php echo $_smarty_tpl->tpl_vars['aHtmlRssAlternate']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['aHtmlRssAlternate']->value['title'];?>
">
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['sHtmlCanonical']->value){?>
    <link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['sHtmlCanonical']->value;?>
"/>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['bRefreshToHome']->value){?>
    <meta HTTP-EQUIV="Refresh" CONTENT="3; URL=<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
/">
<?php }?>


    <script type="text/javascript">
        var DIR_WEB_ROOT = '<?php echo smarty_function_cfg(array('name'=>"path.root.web"),$_smarty_tpl);?>
';
        var DIR_STATIC_SKIN = '<?php echo smarty_function_cfg(array('name'=>"path.static.skin"),$_smarty_tpl);?>
';
        var DIR_ROOT_ENGINE_LIB = '<?php echo smarty_function_cfg(array('name'=>"path.root.engine_lib"),$_smarty_tpl);?>
';
        var LIVESTREET_SECURITY_KEY = '<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
';
        var SESSION_ID = '<?php echo $_smarty_tpl->tpl_vars['_sPhpSessionId']->value;?>
';
        var BLOG_USE_TINYMCE = '<?php echo smarty_function_cfg(array('name'=>"view.tinymce"),$_smarty_tpl);?>
';

        var TINYMCE_LANG = 'en';
        <?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('lang.current')=='russian'){?>
        TINYMCE_LANG = 'ru';
        <?php }?>

        var aRouter = new Array();
        <?php  $_smarty_tpl->tpl_vars['sPath'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sPath']->_loop = false;
 $_smarty_tpl->tpl_vars['sPage'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aRouter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sPath']->key => $_smarty_tpl->tpl_vars['sPath']->value){
$_smarty_tpl->tpl_vars['sPath']->_loop = true;
 $_smarty_tpl->tpl_vars['sPage']->value = $_smarty_tpl->tpl_vars['sPath']->key;
?>
        aRouter['<?php echo $_smarty_tpl->tpl_vars['sPage']->value;?>
'] = '<?php echo $_smarty_tpl->tpl_vars['sPath']->value;?>
';
        <?php } ?>
    </script>


<?php echo $_smarty_tpl->tpl_vars['aHtmlHeadFiles']->value['js'];?>



    <script type="text/javascript">
        var tinyMCE = false;
        ls.lang.load(<?php echo smarty_function_json(array('var'=>$_smarty_tpl->tpl_vars['aLangJs']->value),$_smarty_tpl);?>
);
        ls.registry.set('comment_max_tree', '<?php echo smarty_function_cfg(array('name'=>"module.comment.max_tree"),$_smarty_tpl);?>
');
    </script>

<?php echo smarty_function_hook(array('run'=>'html_head_end'),$_smarty_tpl);?>

</head>

<?php $_smarty_tpl->tpl_vars['body_classes'] = new Smarty_variable(($_smarty_tpl->tpl_vars['body_classes']->value).(' ls-user-role-user'), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
    <?php $_smarty_tpl->tpl_vars['body_classes'] = new Smarty_variable(($_smarty_tpl->tpl_vars['body_classes']->value).(' ls-user-role-admin'), null, 0);?>
<?php }?>

<?php echo smarty_function_add_block(array('group'=>'toolbar','name'=>'toolbar_admin.tpl','priority'=>100),$_smarty_tpl);?>

<?php echo smarty_function_add_block(array('group'=>'toolbar','name'=>'toolbar_scrollup.tpl','priority'=>-100),$_smarty_tpl);?>


<body class="<?php echo $_smarty_tpl->tpl_vars['body_classes']->value;?>
">
<?php echo smarty_function_hook(array('run'=>'body_begin'),$_smarty_tpl);?>


<header id="header">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <div class="nav-collapse nav logo">
                    <a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['sWebPluginSkin']->value;?>
images/logo32x32.png" alt="<?php echo $_smarty_tpl->tpl_vars['sAdminTitle']->value;?>
"/>
                    </a>
                </div>
                <a class="brand" href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
">
                <?php echo $_smarty_tpl->tpl_vars['sAdminTitle']->value;?>

                </a>

                <div class="nav-collapse">
                    <ul class="nav">
                        <li class="divider-vertical"></li>
                        <li><a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['oLang']->value->adm_goto_site;?>
</a></li>
                    <?php echo smarty_function_hook(array('run'=>'main_menu'),$_smarty_tpl);?>

                    </ul>
                </div>

                <div class="nav-collapse pull-right">
                    <ul class="nav">
                        <li>
                            <a href="<?php echo smarty_function_router(array('page'=>'login'),$_smarty_tpl);?>
exit/?security_ls_key=<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
">
                                <i class="icon-off icon-gray"></i>
                                <?php echo $_smarty_tpl->tpl_vars['aLang']->value['exit'];?>

                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>

<div id="container" class="container <?php echo smarty_function_hook(array('run'=>'container_class'),$_smarty_tpl);?>
">

    <div id="wrapper" class="row">
        <div class="left-sidebar span2">
        
        <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['sTemplatePath']->value)."/inc.menu.main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        
        </div>

        <div id="content" role="main" class="span11">
        <?php /*  Call merged included template "inc.system_message.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('inc.system_message.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1044010254561a99a02fbf25-83101960');
content_561a99a04b3800_43859915($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "inc.system_message.tpl" */?>
        <?php echo smarty_function_hook(array('run'=>'content_begin'),$_smarty_tpl);?>

        

<script type="text/javascript">
    aceAdmin.sort = function (sort, order) {
        var i, el;
        if (document.getElementById) {
            if ((el = document.getElementById('user_list_sort'))) el.value = sort;
            if ((el = document.getElementById('user_list_order'))) el.value = order;
            if ((el = document.getElementById('admin_form_seek'))) el.submit();
        }
    }

    aceAdmin.sortToggle = function (sort, order) {
        aceAdmin.sort(sort, (order == 1) ? 2 : 1);
    }

    aceAdmin.selectAllUsers = function (element) {
        if ($(element).prop('checked')) {
            $('table.users-list tr.selectable td.checkbox input[type=checkbox]').prop('checked', true);
            $('table.users-list tr.selectable').addClass('info');
        } else {
            $('table.users-list tr.selectable td.checkbox input[type=checkbox]').prop('checked', false);
            $('table.users-list tr.selectable').removeClass('info');
        }
        aceAdmin.user.select();
    }

    aceAdmin.selectIp = function (ip) {
        if (!$('#admin_form_seek_div').hasClass('in'))
            $('#admin_form_seek_div').collapse('show');
        $('input.ip-part').val('');
        $.each(ip.toString().split('.'), function(index, item){
            $('#user_filter_ip' + (index+1)).val(parseInt(item)).parents('.control-group').first().addClass('success');
        });
    }

    aceAdmin.splitIp = function () {
        $('td.ip-split').each(function () {
            var ip = $(this).text();
            if (ip) {
                var html = '';
                var parts = ip.split('.');
                for (var i = 0; i < parts.length; i++) {
                    if (!html) {
                        html = '<span class="ip-split-' + i + '">' + parts[i] + '</span>';
                    }
                    else {
                        html = '<span class="ip-split-' + i + '">' + html + '.' + parts[i] + '</span>';
                    }
                }
                $(this).html(html);
                $(this).find('span').each(function () {
                    $(this).mouseover(function (event) {
                        $(this).addClass('hover');
                        event.stopPropagation();
                    }).mouseout(function (event) {
                                $(this).removeClass('hover');
                                event.stopPropagation();
                            }).click(function(event){
                                event.stopPropagation();
                                $(this).addClass('hover');
                                aceAdmin.selectIp($(this).text());
                            });
                });
            }
        });
    }

    $(function () {
        aceAdmin.splitIp();
    });
</script>


<h3><?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_users_list;?>
</h3>

<ul class="nav nav-tabs">
    <li class="nav-tabs-add">
        <span><i class="icon-plus-sign icon-disabled"></i></span>
    </li>
    <li <?php if ($_smarty_tpl->tpl_vars['sMode']->value=='all'||$_smarty_tpl->tpl_vars['sMode']->value==''){?>class="active"<?php }?>>
        <a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
users/list/">All users <span class="badge"><?php echo $_smarty_tpl->tpl_vars['aStat']->value['count_all'];?>
</span></a>
    </li>
    <li <?php if ($_smarty_tpl->tpl_vars['sMode']->value=='admins'){?>class="active"<?php }?>>
        <a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
users/admins/">Admins <span class="badge"><?php echo $_smarty_tpl->tpl_vars['aStat']->value['count_admins'];?>
</span></a>
    </li>
</ul>

    <?php if ($_smarty_tpl->tpl_vars['aUserList']->value){?>
        <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['sTemplatePath']->value)."/inc.paging.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['sTemplatePathAction']->value)."/table_users.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['sTemplatePath']->value)."/inc.paging.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }else{ ?>
        <?php echo $_smarty_tpl->tpl_vars['oLang']->value->user_empty;?>

    <?php }?>

        <?php echo smarty_function_hook(array('run'=>'content_end'),$_smarty_tpl);?>

        </div>
        <!-- /content -->

        <div class="sidebar span3">
            <div class="widget-info well" style="text-align: center;">
                <?php if (Config::Get('plugin.aceadminpanel.altocms-logo')!==false){?>
                <a href="http://altocms.com" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['sWebPluginSkin']->value;?>
images/altocms-logo.png"></a><br/>
                <a href="http://altocms.com" target="_blank">www.altocms.com</a>
                <?php }?>
            </div>
        
    <script type="text/javascript">
        if (!aceAdmin.user) aceAdmin.user = { };

        aceAdmin.user.messageSubmit = function (msg) {
            var i, el;
            if ((el = $('#users_list'))) {
                if (!el.val()) {
                    alert(msg[0]);
                    return false;
                }
            }
            if ((el = $('#talk_title'))) {
                if (el.val().length < 2 || el.value.length > 200) {
                    alert(msg[1]);
                    return false;
                }
            }
            if ((el = $('#talk_text'))) {
                if (el.val().length < 2 || el.value.length > 3000) {
                    alert(msg[2]);
                    return false;
                }
            }
            return true;
        }

        aceAdmin.user.filterReset = function (button) {
            var form = $(button).parent('form');
            form.find('input[type=text]').each(function () {
                $(this).val('');
            });
            var parent = form.parents('.row.users-form:first');
            if (parent) $.cookie(parent.attr('id'), null);
            form.submit();
        }


        aceAdmin.user.deleteConfirm = function (confirm) {
            if (!$('form .users_list').val()) {
                ls.msg.error('Error', '<?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_users_not_selected;?>
');
            } else {
                $('#adm_users_del_confirm').modal();
            }
            return false;
        }

        aceAdmin.user.deleteSubmit = function (confirm) {
            $('#adm_users_del_confirm').modal('hide');
            if (confirm === true) {
                var form = $('#admin_user_del form');
                form.find('input[name=adm_del_login]').val($('form .users_list').val());
                form.submit();
            }
            return false;
        }

        aceAdmin.user.select = function (list) {
            //console.log(list);
            if (aceAdmin.isEmpty(list)) list = [];
            else if (typeof list == 'string') list = [list];

            $('tr.selectable td.checkbox input[type=checkbox]:checked').each(function () {
                var id = $(this).prop('id');
                if (id.indexOf('login_') === 0) {
                    list.push(id.substr(6, 255));
                }
            });

            var view = '';
            $.each(list, function (index, item) {
                if (view) view += ', ';
                view += '<span class="popup-user">' + item + '</span>';
            });
            $('form .users_list').val(list.join(', '));
            $('form .users_list_view').html(view);
        }

    </script>

    <div class="accordion" id="user-comands-switch">
    <?php if ($_smarty_tpl->tpl_vars['oUserProfile']->value){?>
        <?php if ($_smarty_tpl->tpl_vars['oUserProfile']->value->IsBannedByLogin()){?>
            <div class="accordion-group no-border">
                <div class="accordion-heading">
                    <button class="btn-block btn left" data-target="#admin_user_unban" data-toggle="collapse"
                            data-parent="#user-comands-switch">
                        <i class="icon-thumbs-up"></i>
                        <?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_users_unban;?>

                    </button>
                </div>

                <div class="accordion-body collapse" id="admin_user_unban">
                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['sFormAction']->value;?>
" class="well well-small">
                        <input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
"/>

                        <?php if ($_smarty_tpl->tpl_vars['oUserProfile']->value->getBanLine()){?>
                            <?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_ban_upto;?>
 <?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getBanLine();?>
 <br/>
                        <?php }else{ ?>
                            <?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_ban_unlim;?>
 <br/>
                        <?php }?>
                        <?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_ban_comment;?>
: <?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getBanComment();?>
<br/>
                        <br/>
                        <input type="hidden" name="ban_login" value="<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getLogin();?>
"/>
                        <input type="hidden" name="adm_user_ref" value="<?php echo $_smarty_tpl->tpl_vars['sPageRef']->value;?>
"/>
                        <input type="hidden" name="adm_user_action" value="adm_unban_user"/>

                        <div class="form-actions">
                            <button type="submit" name="adm_action_submit" class="btn btn-primary">
                                <?php echo $_smarty_tpl->tpl_vars['oLang']->value->adm_users_unban;?>

                            </button>
                        </div>
                    </form>
                </div>
            </div>
        <?php }else{ ?>
            <div class="accordion-group no-border">
                <div class="accordion-heading">
                    <button class="btn-block btn left" data-target="#admin_user_ban" data-toggle="collapse"
                            data-parent="#user-comands-switch">
                        <i class="icon-ban-circle"></i>
                        <?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_users_ban;?>

                    </button>
                </div>

                <div class="accordion-body collapse" id="admin_user_ban">
                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['sFormAction']->value;?>
" class="well well-small">
                        <br/>
                        <input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
"/>

                        <input type="hidden" name="ban_login" value="<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getLogin();?>
"/>

                        <label class="radio">
                            <input type="radio" name="ban_period" value="days" checked/>
                            <?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_ban_for;?>

                            <input type="text" name="ban_days" id="ban_days" class="num1"/> <?php echo $_smarty_tpl->tpl_vars['oLang']->value->adm_ban_days;?>

                        </label>

                        <label class="radio">
                            <input type="radio" name="ban_period" value="unlim"/>
                            <?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_ban_unlim;?>

                        </label>

                        <label for="ban_comment"><?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_ban_comment;?>
</label>
                        <input type="text" name="ban_comment" id="ban_comment" maxlength="255"/>


                        <input type="hidden" name="adm_user_ref" value="<?php echo $_smarty_tpl->tpl_vars['sPageRef']->value;?>
"/>
                        <input type="hidden" name="adm_user_action" value="adm_ban_user"/>
                        <button type="submit" name="adm_action_submit"
                                class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_users_ban;?>
</button>
                    </form>
                </div>
            </div>
        <?php }?>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['oUserProfile']->value){?>
        <div class="accordion-group no-border">
            <div class="accordion-heading">
                <button class="btn-block btn left" data-target="#admin_form_seek_div" data-toggle="collapse"
                        data-parent="#user-comands-switch">
                    <?php if ($_smarty_tpl->tpl_vars['aFilter']->value){?><i class="icon-filter icon-green pull-right"></i><?php }?>
                    <i class="icon-search"></i>
                    <?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_seek_users;?>

                </button>
            </div>

            <div class="accordion-body collapse collapse-save" id="admin_form_seek_div">
                <form method="post" action="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
users/" id="admin_form_seek" class="well well-small">
                    <input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
"/>

                    <div class="row control-group <?php if ($_smarty_tpl->tpl_vars['sUserFilterLogin']->value){?>success<?php }?>">
                        <label for="user_filter_login"><?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_user_login;?>
</label>

                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-user"></i></span><input type="text" name="user_filter_login"
                                                                                        id="user_filter_login"
                                                                                        value="<?php echo $_smarty_tpl->tpl_vars['sUserFilterLogin']->value;?>
"
                                                                                        class="wide"/>
                        </div>
                    </div>

                    <div class="row control-group <?php if ($_smarty_tpl->tpl_vars['aFilter']->value['email']){?>success<?php }?>">
                        <label for="user_filter_email"><?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_user_email;?>
</label>

                        <div class="input-prepend">
                            <span class="add-on">@</span><input type="text" name="user_filter_email" id="user_filter_email"
                                                                value="<?php echo $_smarty_tpl->tpl_vars['aFilter']->value['email'];?>
" maxlength="64"
                                                                class="wide"/>
                        </div>
                        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_user_filter_email_notice;?>
</span>
                    </div>

                    <div class="row control-group <?php if ($_smarty_tpl->tpl_vars['aFilter']->value['regdate']){?>success<?php }?>">
                        <label for="user_filter_regdate"><?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_users_date_reg;?>
</label>

                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-calendar"></i></span><input type="text"
                                                                                            name="user_filter_regdate"
                                                                                            id="user_filter_regdate"
                                                                                            value="<?php echo $_smarty_tpl->tpl_vars['aFilter']->value['regdate'];?>
"
                                                                                            class="wide"/>
                        </div>
                        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_user_filter_regdate_notice;?>
</span>
                    </div>

                    <div class="row control-group <?php if ($_smarty_tpl->tpl_vars['sUserFilterIp']->value){?>success<?php }?>">
                        <label for="user_filter_ip1"><?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_user_ip;?>
</label>
                        <input type="text" name="user_filter_ip1" id="user_filter_ip1" value="<?php echo $_smarty_tpl->tpl_vars['aUserFilterIp']->value[0];?>
"
                               maxlength="3"
                               class="ip-part" placeholder="*"/> .
                        <input type="text" name="user_filter_ip2" id="user_filter_ip2" value="<?php echo $_smarty_tpl->tpl_vars['aUserFilterIp']->value[1];?>
"
                               maxlength="3"
                               class="ip-part" placeholder="*"/> .
                        <input type="text" name="user_filter_ip3" id="user_filter_ip3" value="<?php echo $_smarty_tpl->tpl_vars['aUserFilterIp']->value[2];?>
"
                               maxlength="3"
                               class="ip-part" placeholder="*"/> .
                        <input type="text" name="user_filter_ip4" id="user_filter_ip4" value="<?php echo $_smarty_tpl->tpl_vars['aUserFilterIp']->value[3];?>
"
                               maxlength="3"
                               class="ip-part" placeholder="*"/>
                        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_user_filter_ip_notice;?>
</span>
                    </div>

                    <input type="hidden" name="user_list_sort" id="user_list_sort" value="<?php echo $_smarty_tpl->tpl_vars['sUserListSort']->value;?>
"/>
                    <input type="hidden" name="user_list_order" id="user_list_order" value="<?php echo $_smarty_tpl->tpl_vars['sUserListOrder']->value;?>
"/>
                    <input type="hidden" name="adm_user_ref" value="<?php echo $_smarty_tpl->tpl_vars['sPageRef']->value;?>
"/>
                    <input type="hidden" name="adm_user_action" value="adm_user_seek"/>
                    <button type="submit" name="adm_action_submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_seek;?>
</button>
                    <button type="reset" name="adm_action_reset" class="btn"
                            onclick="$ace.user.filterReset(this);return false;"><?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_reset;?>
</button>
                </form>
            </div>
        </div>

        <div class="accordion-group no-border">
            <div class="accordion-heading">
                <button class="btn-block btn left" data-target="#admin_form_send" data-toggle="collapse"
                        data-parent="#user-comands-switch">
                    <i class="icon-envelope"></i>
                    <?php echo $_smarty_tpl->tpl_vars['oLang']->value->_user_write_prvmsg;?>

                </button>
            </div>

            <div class="accordion-body collapse" id="admin_form_send">
                <form method="post" action="" class="well well-small">
                    <input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
"/>

                    <div class="row">
                        <label for="users_list"><?php echo $_smarty_tpl->tpl_vars['oLang']->value->talk_create_users;?>
:</label>
                        <span class="users_list_view"></span>
                        <input type="hidden" name="users_list" id="users_list" class="users_list"/>
                    </div>

                    <div class="row">
                        <label>
                            <input type="radio" name="send_common_message" id="send_common_message_yes" value="yes"
                                   onclick="AdminMessageSeparate(this.checked)"/>
                            <?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_send_common_message;?>

                        </label>

                        <label>
                            <input type="radio" name="send_common_message" id="send_common_message_no" value="no" checked
                                   onclick="AdminMessageSeparate(!this.checked)"/>
                            <?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_send_separate_messages;?>

                        </label>
            <span id="send_common_notice" class="help-block"
                  style="display:none;"><?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_send_common_notice;?>
</span>
                        <span id="send_separate_notice" class="help-block"><?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_send_separate_notice;?>
</span>
                    </div>

                    <div class="row">
                        <label for="talk_inbox_list"><?php echo $_smarty_tpl->tpl_vars['oLang']->value->talk_menu_inbox_list;?>
</label>
                        <select name="talk_inbox_list" id="talk_inbox_list" onchange="AdminMessageSelect();">
                            <option value="0">-- <?php echo $_smarty_tpl->tpl_vars['oLang']->value->_talk_menu_inbox_create;?>
 --</option>
                            <?php if ($_smarty_tpl->tpl_vars['aTalks']->value){?>
                                <?php  $_smarty_tpl->tpl_vars['oTalk'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oTalk']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aTalks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oTalk']->key => $_smarty_tpl->tpl_vars['oTalk']->value){
$_smarty_tpl->tpl_vars['oTalk']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['oTalk']->value->getId();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTalk']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <?php } ?>
                            <?php }?>
                        </select>
                    </div>

                    <div class="row">
                        <label for="talk_title"><?php echo $_smarty_tpl->tpl_vars['oLang']->value->_talk_create_title;?>
:</label>
                        <input type="text" name="talk_title" id="talk_title" maxlength="30" class="wide"/>
                    </div>

                    <div class="row">
                        <label for="talk_text"><?php echo $_smarty_tpl->tpl_vars['oLang']->value->_talk_create_text;?>
:</label>
                        <textarea name="talk_text" id="talk_text" cols="80" rows="12" class="wide"></textarea>
                    </div>


                    <div class="row">
                        <label for="send_copy_self" class="checkbox">
                            <input type="checkbox" name="send_copy_self" id="send_copy_self" checked/>
                            <?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_send_copy_self;?>

                        </label>
                    </div>

                    <input type="hidden" name="adm_user_ref" value="<?php echo $_smarty_tpl->tpl_vars['sPageRef']->value;?>
"/>
                    <input type="hidden" name="adm_user_action" value="adm_user_message"/>

                    <button type="submit" name="adm_action_submit" class="btn btn-primary"
                            onclick="return $ace.user.messageSubmit(['<?php echo $_smarty_tpl->tpl_vars['oLang']->value->_talk_create_users_error;?>
', '<?php echo $_smarty_tpl->tpl_vars['oLang']->value->_talk_create_title_error;?>
', '<?php echo $_smarty_tpl->tpl_vars['oLang']->value->talk_create_text_error;?>
'])">
                        <?php echo $_smarty_tpl->tpl_vars['oLang']->value->_talk_create_submit;?>

                    </button>

                </form>
            </div>
        </div>
    <?php }?>

    <div class="accordion-group no-border">
        <div class="accordion-heading">
            <button class="btn-block btn left" data-target="#admin_user_setadmin" data-toggle="collapse"
                    data-parent="#user-comands-switch">
                <i class="icon-user"></i>
                <?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_include_admin;?>

            </button>
        </div>

        <div class="accordion-body collapse" id="admin_user_setadmin">
            <form method="post" action="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
users/">

                <input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
"/>

                <div class="well well-small">
                    <div class="row control-group">
                        <label for="user_login_admin"><?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_user_login;?>
</label>

                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-user"></i></span><input type="text" name="user_login_admin"
                                                                                        id="user_login_admin"
                                                                                        class="wide users_list autocomplete-users-sep"/>
                        </div>
                    </div>

                    <div class="form-actions">
                        <input type="hidden" name="adm_user_ref" value="<?php echo $_smarty_tpl->tpl_vars['sPageRef']->value;?>
"/>
                        <input type="hidden" name="adm_user_action" value="adm_user_setadmin"/>
                        <button type="submit" name="adm_action_submit" class="btn btn-primary">
                            <?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_include;?>

                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="accordion-group no-border">
        <div class="accordion-heading">
            <button class="btn-block btn left" data-target="#admin_user_del" data-toggle="collapse"
                    data-parent="#user-comands-switch">
                <i class="icon-remove"></i>
                <?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_users_del;?>

            </button>
        </div>

        <div class="accordion-body collapse" id="admin_user_del">
            <form method="post" action="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
users/">

                <input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
"/>

                <div class="alert alert-block">
                    <?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_users_del_warning;?>

                </div>

                <div class="well well-small">
                    <input type="hidden" name="adm_del_login" value=""/>
                    <?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_users_del_confirm;?>


                    <div class="form-actions">
                        <input type="hidden" name="adm_user_ref" value="<?php echo $_smarty_tpl->tpl_vars['sPageRef']->value;?>
"/>
                        <input type="hidden" name="adm_user_action" value="adm_del_user"/>
                        <input type="hidden" name="adm_user_del_confirm" value="1"/>
                        <button type="submit" name="adm_action_submit" class="btn btn-primary"
                                onclick="return $ace.user.deleteConfirm();">
                            <?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_users_del;?>

                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>

    <script type="text/javascript">
        $(function () {
            $('input.ip-part').focus(function () {
                $(this).select();
            });
            <?php if ($_smarty_tpl->tpl_vars['oUserProfile']->value){?>
            $ace.user.select('<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getLogin();?>
');
            <?php }?>
        });
    </script>

    <div id="adm_users_del_confirm" class="modal hide fade">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3><?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_users_del_confirm;?>
</h3>
        </div>
        <div class="modal-body alert-danger">
            <p>
                <?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_users_del_warning;?>

            </p>
        </div>
        <div class="modal-body">
            <form>
                <p>
                <?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_selected_users;?>
: <span class="users_list_view"></span>
                <input type="hidden" name="users_list" class="users_list"/>
                </p>
            </form>
        </div>
        <div class="modal-footer">
            <a href="#" class="btn" onclick="return $ace.user.deleteSubmit(false);"><?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_no;?>
</a>
            <a href="#" class="btn btn-danger" onclick="return $ace.user.deleteSubmit(true);"><?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_users_del;?>
</a>
        </div>
    </div>


        </div>

    </div>
    <!-- /wrapper -->

</div>
<!-- /container -->

<footer id="footer">
    <div class="container">

    <?php echo smarty_function_hook(array('run'=>'footer_end'),$_smarty_tpl);?>

    </div>
</footer>

<?php /*  Call merged included template "toolbar.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('toolbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1044010254561a99a02fbf25-83101960');
content_561a99a08bc455_05274986($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "toolbar.tpl" */?>

<?php echo smarty_function_hook(array('run'=>'body_end'),$_smarty_tpl);?>


</body>
</html><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:17:20
         compiled from "/var/www/html/plugins/aceadminpanel/templates/skin/admin_new/inc.system_message.tpl" */ ?>
<?php if ($_valid && !is_callable('content_561a99a04b3800_43859915')) {function content_561a99a04b3800_43859915($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['noShowSystemMessage']->value){?>
    <?php if ($_smarty_tpl->tpl_vars['aMsgError']->value){?>
        <?php  $_smarty_tpl->tpl_vars['aMsg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aMsg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aMsgError']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aMsg']->key => $_smarty_tpl->tpl_vars['aMsg']->value){
$_smarty_tpl->tpl_vars['aMsg']->_loop = true;
?>
        <div class="alert alert-error">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <?php if ($_smarty_tpl->tpl_vars['aMsg']->value['title']!=''){?>
                <h4 class="alert-heading"><?php echo $_smarty_tpl->tpl_vars['aMsg']->value['title'];?>
:</h4>
            <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['aMsg']->value['msg'];?>

        </div>
        <?php } ?>
    <?php }?>


    <?php if ($_smarty_tpl->tpl_vars['aMsgNotice']->value){?>
        <?php  $_smarty_tpl->tpl_vars['aMsg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aMsg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aMsgNotice']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aMsg']->key => $_smarty_tpl->tpl_vars['aMsg']->value){
$_smarty_tpl->tpl_vars['aMsg']->_loop = true;
?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <?php if ($_smarty_tpl->tpl_vars['aMsg']->value['title']!=''){?>
                <h4 class="alert-heading"><?php echo $_smarty_tpl->tpl_vars['aMsg']->value['title'];?>
:</h4>
            <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['aMsg']->value['msg'];?>

        </div>
        <?php } ?>
    <?php }?>
<?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:17:20
         compiled from "/var/www/html/templates/skin/reboot/toolbar.tpl" */ ?>
<?php if ($_valid && !is_callable('content_561a99a08bc455_05274986')) {function content_561a99a08bc455_05274986($_smarty_tpl) {?><aside class="toolbar">
	<?php /*  Call merged included template "blocks.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('blocks.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('group'=>'toolbar'), 0, '1044010254561a99a02fbf25-83101960');
content_561a99a08c74a9_75346163($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "blocks.tpl" */?>
</aside><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:17:20
         compiled from "/var/www/html/templates/skin/reboot/blocks.tpl" */ ?>
<?php if ($_valid && !is_callable('content_561a99a08c74a9_75346163')) {function content_561a99a08c74a9_75346163($_smarty_tpl) {?><?php if (!is_callable('smarty_function_get_blocks')) include '/var/www/html/engine/modules/viewer/plugs/function.get_blocks.php';
if (!is_callable('smarty_insert_block')) include '/var/www/html/engine/modules/viewer/plugs/insert.block.php';
?><?php echo smarty_function_get_blocks(array('assign'=>'aBlocksLoad'),$_smarty_tpl);?>


<?php if (isset($_smarty_tpl->tpl_vars['aBlocksLoad']->value[$_smarty_tpl->tpl_vars['group']->value])){?>
	<?php  $_smarty_tpl->tpl_vars['aBlock'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aBlock']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aBlocksLoad']->value[$_smarty_tpl->tpl_vars['group']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aBlock']->key => $_smarty_tpl->tpl_vars['aBlock']->value){
$_smarty_tpl->tpl_vars['aBlock']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['aBlock']->value['type']=='block'){?>
			<?php echo smarty_insert_block(array('block' => $_smarty_tpl->tpl_vars['aBlock']->value['name'], 'params' => $_smarty_tpl->tpl_vars['aBlock']->value['params']),$_smarty_tpl);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['aBlock']->value['type']=='template'){?>
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['aBlock']->value['name'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('params'=>$_smarty_tpl->tpl_vars['aBlock']->value['params']), 0);?>

		<?php }?>
	<?php } ?>
<?php }?><?php }} ?>