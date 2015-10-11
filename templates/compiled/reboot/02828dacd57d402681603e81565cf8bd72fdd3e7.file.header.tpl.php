<?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:17:52
         compiled from "/var/www/html/templates/skin/reboot/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:493396380561a99c0874923-71781258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02828dacd57d402681603e81565cf8bd72fdd3e7' => 
    array (
      0 => '/var/www/html/templates/skin/reboot/header.tpl',
      1 => 1444473603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '493396380561a99c0874923-71781258',
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
    'oUserCurrent' => 0,
    'body_classes' => 0,
    'noSidebar' => 0,
    'sidebarPosition' => 0,
    'sMenuItemSelect' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561a99c0a47dc8_87415852',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a99c0a47dc8_87415852')) {function content_561a99c0a47dc8_87415852($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cfg')) include '/var/www/html/engine/modules/viewer/plugs/function.cfg.php';
if (!is_callable('smarty_function_hook')) include '/var/www/html/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_router')) include '/var/www/html/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_json')) include '/var/www/html/engine/modules/viewer/plugs/function.json.php';
if (!is_callable('smarty_function_add_block')) include '/var/www/html/engine/modules/viewer/plugs/function.add_block.php';
?><!doctype html>

<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="ru"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="ru"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="ru"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="ru"> <!--<![endif]-->

<head>
<script src="http://93.171.159.12/plugins/talkbell/templates/skin/default/js/soundmanager2.js';">
<script>
function spoiler_click(event){
    var event = event || window.event;
    if(event.button!=0)return;
    var target=event.target||event.srcElement;
    if(!target) return;
    while(!target.classList.contains("spoiler-title")){
        target = target.parentNode||target.parentElement;
        if(!target || target==document.body)return;
    }
   
    var parent = target.parentNode||target.parentElement;
    if(!parent || parent.lastElementChild == target)return true;
    var b = parent.querySelector(".spoiler-body");
    if(!b) return;
    if(b.style.display != "block") {
		b.style.display = "block";
		b.parentElement.getElementsByClassName("spoiler-title")[0].className = "spoiler-title spoiler-open"
	} else {
		b.style.display = "none";
		b.parentElement.getElementsByClassName("spoiler-title")[0].className = "spoiler-title spoiler-close"

	}
    event.preventDefault ? event.preventDefault() : (event.returnValue=false);
    return false;
}
 
window.addEventListener("DOMContentLoaded", function(){
    document.body.addEventListener("click", spoiler_click);
});
</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo smarty_function_cfg(array('name'=>"path.static.skin"),$_smarty_tpl);?>
/css/menu.css">
	<?php echo smarty_function_hook(array('run'=>'html_head_begin'),$_smarty_tpl);?>

	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title><?php echo $_smarty_tpl->tpl_vars['sHtmlTitle']->value;?>
</title>
	
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['sHtmlDescription']->value;?>
">
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['sHtmlKeywords']->value;?>
">

	<?php echo $_smarty_tpl->tpl_vars['aHtmlHeadFiles']->value['css'];?>


	<link href="<?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/images/favicon.ico?v1" rel="shortcut icon" />
	<link rel="search" type="application/opensearchdescription+xml" href="<?php echo smarty_function_router(array('page'=>'search'),$_smarty_tpl);?>
opensearch/" title="<?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
" />

	<?php if ($_smarty_tpl->tpl_vars['aHtmlRssAlternate']->value){?>
		<link rel="alternate" type="application/rss+xml" href="<?php echo $_smarty_tpl->tpl_vars['aHtmlRssAlternate']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['aHtmlRssAlternate']->value['title'];?>
">
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['sHtmlCanonical']->value){?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['sHtmlCanonical']->value;?>
" />
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['bRefreshToHome']->value){?>
		<meta  HTTP-EQUIV="Refresh" CONTENT="3; URL=<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
/">
	<?php }?>
	
	
	<script type="text/javascript">
		var DIR_WEB_ROOT 			= '<?php echo smarty_function_cfg(array('name'=>"path.root.web"),$_smarty_tpl);?>
';
		var DIR_STATIC_SKIN 		= '<?php echo smarty_function_cfg(array('name'=>"path.static.skin"),$_smarty_tpl);?>
';
		var DIR_ROOT_ENGINE_LIB 	= '<?php echo smarty_function_cfg(array('name'=>"path.root.engine_lib"),$_smarty_tpl);?>
';
		var LIVESTREET_SECURITY_KEY = '<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
';
		var SESSION_ID				= '<?php echo $_smarty_tpl->tpl_vars['_sPhpSessionId']->value;?>
';
		var BLOG_USE_TINYMCE		= '<?php echo smarty_function_cfg(array('name'=>"view.tinymce"),$_smarty_tpl);?>
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
		ls.registry.set('comment_max_tree',<?php echo smarty_function_json(array('var'=>$_smarty_tpl->tpl_vars['oConfig']->value->Get('module.comment.max_tree')),$_smarty_tpl);?>
);
		ls.registry.set('block_stream_show_tip',<?php echo smarty_function_json(array('var'=>$_smarty_tpl->tpl_vars['oConfig']->value->Get('block.stream.show_tip')),$_smarty_tpl);?>
);
	</script>
	
	
	<?php ob_start();?><?php echo smarty_function_cfg(array('name'=>'view.grid.type'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=='fluid'){?>
		<style>
			#container {
				min-width: <?php echo smarty_function_cfg(array('name'=>'view.grid.fluid_min_width'),$_smarty_tpl);?>
px;
				max-width: <?php echo smarty_function_cfg(array('name'=>'view.grid.fluid_max_width'),$_smarty_tpl);?>
px;
			}
		</style>
	<?php }else{ ?>

	<?php }?>
	
	
	<?php echo smarty_function_hook(array('run'=>'html_head_end'),$_smarty_tpl);?>

	
<style>
.sticky {
  position: fixed;
  z-index: 101;
}
.stop {
  position: relative;
  z-index: 101;
}

#container{min-width: 1200px;}

</style>

</head>



<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
	<?php $_smarty_tpl->tpl_vars['body_classes'] = new Smarty_variable(($_smarty_tpl->tpl_vars['body_classes']->value).(' ls-user-role-user'), null, 0);?>
	
	<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
		<?php $_smarty_tpl->tpl_vars['body_classes'] = new Smarty_variable(($_smarty_tpl->tpl_vars['body_classes']->value).(' ls-user-role-admin'), null, 0);?>
	<?php }?>
<?php }else{ ?>
	<?php $_smarty_tpl->tpl_vars['body_classes'] = new Smarty_variable(($_smarty_tpl->tpl_vars['body_classes']->value).(' ls-user-role-guest'), null, 0);?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['oUserCurrent']->value||($_smarty_tpl->tpl_vars['oUserCurrent']->value&&!$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator())){?>
	<?php $_smarty_tpl->tpl_vars['body_classes'] = new Smarty_variable(($_smarty_tpl->tpl_vars['body_classes']->value).(' ls-user-role-not-admin'), null, 0);?>
<?php }?>

<?php echo smarty_function_add_block(array('group'=>'toolbar','name'=>'toolbar_admin.tpl','priority'=>100),$_smarty_tpl);?>

<?php echo smarty_function_add_block(array('group'=>'toolbar','name'=>'toolbar_scrollup.tpl','priority'=>-100),$_smarty_tpl);?>





<body class="<?php echo $_smarty_tpl->tpl_vars['body_classes']->value;?>
 width-<?php echo smarty_function_cfg(array('name'=>'view.grid.type'),$_smarty_tpl);?>
">
	<?php echo smarty_function_hook(array('run'=>'body_begin'),$_smarty_tpl);?>

	<nav id="userbar" class="clearfix">
	<?php echo smarty_function_hook(array('run'=>'userbar_nav'),$_smarty_tpl);?>


		<?php echo $_smarty_tpl->getSubTemplate ('userbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
		<?php echo $_smarty_tpl->getSubTemplate ('window_write.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate ('window_favourite_form_tags.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }else{ ?>
		<?php echo $_smarty_tpl->getSubTemplate ('window_login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }?>
	

	<div id="container" class="<?php echo smarty_function_hook(array('run'=>'container_class'),$_smarty_tpl);?>
">
		<?php echo $_smarty_tpl->getSubTemplate ('header_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate ('nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


		<div id="wrapper" class="<?php echo smarty_function_hook(array('run'=>'wrapper_class'),$_smarty_tpl);?>
">
			<?php if (!$_smarty_tpl->tpl_vars['noSidebar']->value&&$_smarty_tpl->tpl_vars['sidebarPosition']->value=='left'){?>
				<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<?php }?>
		
			<div id="content" role="main" 
				class="<?php if ($_smarty_tpl->tpl_vars['noSidebar']->value){?>content-full-width<?php }?> 
					   <?php if ($_smarty_tpl->tpl_vars['sidebarPosition']->value=='left'){?>content-right<?php }?>"
				<?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='profile'){?>itemscope itemtype="http://data-vocabulary.org/Person"<?php }?>>
				
				<?php echo $_smarty_tpl->getSubTemplate ('nav_content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<?php echo $_smarty_tpl->getSubTemplate ('system_message.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
				<?php echo smarty_function_hook(array('run'=>'content_begin'),$_smarty_tpl);?>

<?php }} ?>