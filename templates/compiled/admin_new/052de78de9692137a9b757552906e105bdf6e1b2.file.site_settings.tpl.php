<?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:20:09
         compiled from "/var/www/html/plugins/aceadminpanel/templates/skin/admin_new/actions/ActionAdmin/site_settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1377151057561a9a49642a52-22508063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '052de78de9692137a9b757552906e105bdf6e1b2' => 
    array (
      0 => '/var/www/html/plugins/aceadminpanel/templates/skin/admin_new/actions/ActionAdmin/site_settings.tpl',
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
  'nocache_hash' => '1377151057561a9a49642a52-22508063',
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
  'unifunc' => 'content_561a9a49a55801_05023650',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a9a49a55801_05023650')) {function content_561a9a49a55801_05023650($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/html/engine/modules/viewer/plugs/function.hook.php';
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('inc.system_message.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1377151057561a9a49642a52-22508063');
content_561a9a49819fc5_14909077($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "inc.system_message.tpl" */?>
        <?php echo smarty_function_hook(array('run'=>'content_begin'),$_smarty_tpl);?>

        

<h3><?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_settings_title;?>
</h3>
<ul class="nav nav-tabs">
    <li <?php if ($_smarty_tpl->tpl_vars['sMenuNavItemSelect']->value=='base'){?>class="active"<?php }?>><a
            href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
site/settings/base/"><?php echo $_smarty_tpl->tpl_vars['oLang']->value->adm_settings_base;?>
</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['sMenuNavItemSelect']->value=='sys'){?>class="active"<?php }?>><a
            href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
site/settings/sys/"><?php echo $_smarty_tpl->tpl_vars['oLang']->value->adm_settings_sys;?>
</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['sMenuNavItemSelect']->value=='acl'){?>class="active"<?php }?>><a
            href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
site/settings/acl/"><?php echo $_smarty_tpl->tpl_vars['oLang']->value->adm_settings_acl;?>
</a></li>
</ul>

<form action="" method="POST">

    <input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
"/>
    <?php  $_smarty_tpl->tpl_vars['aItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aItem']->_loop = false;
 $_smarty_tpl->tpl_vars['sConfigKey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aItem']->key => $_smarty_tpl->tpl_vars['aItem']->value){
$_smarty_tpl->tpl_vars['aItem']->_loop = true;
 $_smarty_tpl->tpl_vars['sConfigKey']->value = $_smarty_tpl->tpl_vars['aItem']->key;
?>
    <p class="offset1">
        <?php if ($_smarty_tpl->tpl_vars['aItem']->value['type']=='section'){?>
            <?php $_smarty_tpl->tpl_vars["sTitle"] = new Smarty_variable(($_smarty_tpl->tpl_vars['sConfigKey']->value), null, 0);?>
            <h4 class="form-actions"><?php echo $_smarty_tpl->tpl_vars['oLang']->value->Get(($_smarty_tpl->tpl_vars['sTitle']->value));?>
</h4>
        <?php }else{ ?>
            <?php if ($_smarty_tpl->tpl_vars['aItem']->value['type']=='checkbox'){?>
                <label class="checkbox <?php if (($_smarty_tpl->tpl_vars['aItem']->value['value'])){?>checked<?php }?>"><?php echo $_smarty_tpl->tpl_vars['oLang']->value->Get(($_smarty_tpl->tpl_vars['sConfigKey']->value));?>
:
                    <input type="<?php echo $_smarty_tpl->tpl_vars['aItem']->value['type'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['sConfigKey']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['sConfigKey']->value;?>
" value="1" class="<?php echo $_smarty_tpl->tpl_vars['aItem']->value['class'];?>
"
                           <?php if (($_smarty_tpl->tpl_vars['aItem']->value['value'])){?>checked<?php }?> />
                </label>
            <?php }elseif($_smarty_tpl->tpl_vars['aItem']->value['type']=='select'){?>
                <label for="<?php echo $_smarty_tpl->tpl_vars['sConfigKey']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['oLang']->value->Get(($_smarty_tpl->tpl_vars['sConfigKey']->value));?>
:</label>
                <select id="<?php echo $_smarty_tpl->tpl_vars['sConfigKey']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['sConfigKey']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['aItem']->value['class'];?>
">
                    <?php  $_smarty_tpl->tpl_vars['sOption'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sOption']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aItem']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sOption']->key => $_smarty_tpl->tpl_vars['sOption']->value){
$_smarty_tpl->tpl_vars['sOption']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['sOption']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['sOption']->value==$_smarty_tpl->tpl_vars['aItem']->value['value']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['sOption']->value;?>
</option>
                    <?php } ?>
                </select>
            <?php }else{ ?>
                <label for="<?php echo $_smarty_tpl->tpl_vars['sConfigKey']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['oLang']->value->Get(($_smarty_tpl->tpl_vars['sConfigKey']->value));?>
:</label>
                <input type="<?php echo $_smarty_tpl->tpl_vars['aItem']->value['type'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['sConfigKey']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['sConfigKey']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['aItem']->value['value'];?>
"
                       class="<?php echo $_smarty_tpl->tpl_vars['aItem']->value['class'];?>
"/><br/>
            <?php }?>
            <!-- span class="form_note"><?php echo $_smarty_tpl->tpl_vars['oLang']->value->Get("adm_set_".($_smarty_tpl->tpl_vars['sConfigKey']->value)."_notice");?>
</span -->
        <?php }?>
        </p>
    <?php } ?>

    <div class="form-actions fix-on-container">
        <div class="navbar fix-on-bottom">
            <div class="navbar-inner">
                <div class="container">
                    <input type="submit" name="submit_data_save" value="<?php echo $_smarty_tpl->tpl_vars['oLang']->value->_adm_save;?>
" class="btn btn-primary pull-right"/>
                </div>
            </div>
        </div>
    </div>

</form>

<script type="text/javascript">
    /*
    $(function () {
        var nav_containers = $('.fix-on-container');
        nav_containers.each(function(index){
            var container = $(this);
            var navbar = container.find('.navbar.fix-on-bottom').first();
            container.waypoint({
                handler:function (event, direction) {
                    navbar.toggleClass('sticky-bottom', direction == 'up');
                },
                offset: 'bottom-in-view'
            });
            navbar.css('width', navbar.width());
            if ($.waypoints('viewportHeight') + $('body').scrollTop() < navbar.offset().top-navbar.outerHeight()) {
                navbar.addClass('sticky-bottom');
            }
        });
    });
    */
</script>


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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('toolbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1377151057561a9a49642a52-22508063');
content_561a9a499f2eb9_77292292($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "toolbar.tpl" */?>

<?php echo smarty_function_hook(array('run'=>'body_end'),$_smarty_tpl);?>


</body>
</html><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:20:09
         compiled from "/var/www/html/plugins/aceadminpanel/templates/skin/admin_new/inc.system_message.tpl" */ ?>
<?php if ($_valid && !is_callable('content_561a9a49819fc5_14909077')) {function content_561a9a49819fc5_14909077($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['noShowSystemMessage']->value){?>
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
<?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:20:09
         compiled from "/var/www/html/templates/skin/reboot/toolbar.tpl" */ ?>
<?php if ($_valid && !is_callable('content_561a9a499f2eb9_77292292')) {function content_561a9a499f2eb9_77292292($_smarty_tpl) {?><aside class="toolbar">
	<?php /*  Call merged included template "blocks.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('blocks.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('group'=>'toolbar'), 0, '1377151057561a9a49642a52-22508063');
content_561a9a499faee9_66309487($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "blocks.tpl" */?>
</aside><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:20:09
         compiled from "/var/www/html/templates/skin/reboot/blocks.tpl" */ ?>
<?php if ($_valid && !is_callable('content_561a9a499faee9_66309487')) {function content_561a9a499faee9_66309487($_smarty_tpl) {?><?php if (!is_callable('smarty_function_get_blocks')) include '/var/www/html/engine/modules/viewer/plugs/function.get_blocks.php';
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