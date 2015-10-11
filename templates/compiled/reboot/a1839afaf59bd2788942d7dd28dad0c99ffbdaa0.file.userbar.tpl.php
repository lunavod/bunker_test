<?php /* Smarty version Smarty-3.1.8, created on 2015-10-11 20:17:52
         compiled from "/var/www/html/templates/skin/reboot/userbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1670312721561a99c0a72756-51587665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1839afaf59bd2788942d7dd28dad0c99ffbdaa0' => 
    array (
      0 => '/var/www/html/templates/skin/reboot/userbar.tpl',
      1 => 1444583793,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1670312721561a99c0a72756-51587665',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'aLang' => 0,
    'iUserCurrentCountTalkNew' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_561a99c0b26f29_39114786',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561a99c0b26f29_39114786')) {function content_561a99c0b26f29_39114786($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cfg')) include '/var/www/html/engine/modules/viewer/plugs/function.cfg.php';
if (!is_callable('smarty_function_router')) include '/var/www/html/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/var/www/html/engine/modules/viewer/plugs/function.hook.php';
?><input type="checkbox" id="hmt" class="hidden-menu-ticker">
<label class="btn-menu" for="hmt">
    <span class="first"></span>
    <span class="second"></span>
    <span class="third"></span>
    <a href="/">
        <img src="<?php echo smarty_function_cfg(array('name'=>"path.static.skin"),$_smarty_tpl);?>
/logo.png" class="logo">
    </a>
</label>

<ul class="nav nav-userbar hidden-menu">
    <a href="/">
    </a>
    <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
    <li class="nav-userbar-username">
        <a href="<?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath();?>
" class="username">
            <?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getLogin();?>

            <img src="<?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getProfileAvatarPath(24);?>
" alt="avatar" class="avatar" />
        </a>
    </li>
    <li><a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
add/" class="write" id="modal_write_show"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_create'];?>
<i class="fa fa-pencil-square-o"></i></a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath();?>
favourites/topics/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_menu_profile_favourites'];?>
<i class="fa fa-star-half-o"></i></a></li>
    <li><a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['iUserCurrentCountTalkNew']->value){?>class="new-messages"<?php }?> id="new_messages" title="<?php if ($_smarty_tpl->tpl_vars['iUserCurrentCountTalkNew']->value){?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_privat_messages_new'];?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_privat_messages'];?>
<?php if ($_smarty_tpl->tpl_vars['iUserCurrentCountTalkNew']->value){?> (<?php echo $_smarty_tpl->tpl_vars['iUserCurrentCountTalkNew']->value;?>
)<?php }?><i class="fa fa-envelope-o"></i></a></li>
    <li><a href="<?php echo smarty_function_router(array('page'=>'settings'),$_smarty_tpl);?>
profile/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_settings'];?>
<i class="fa fa-cogs"></i></a></li>
    <?php echo smarty_function_hook(array('run'=>'userbar_item'),$_smarty_tpl);?>

    <li><a href="#" onclick="wide(); return false;" class="widemode" id="wide">Широкий режим<img style="margin-top: -5px;width: 30px;float: right;margin-right: -5px;" src="<?php echo smarty_function_cfg(array('name'=>"path.static.skin"),$_smarty_tpl);?>
/images/wide_mode.png"></img></a></li>
    <li style="bottom: 0px;"><a href="<?php echo smarty_function_router(array('page'=>'login'),$_smarty_tpl);?>
exit/?security_ls_key=<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['exit'];?>
<i class="fa fa-times-circle-o"></i></a></li>
    <?php }else{ ?>
    <?php echo smarty_function_hook(array('run'=>'userbar_item'),$_smarty_tpl);?>

    <li><a href="<?php echo smarty_function_router(array('page'=>'login'),$_smarty_tpl);?>
" class="js-login-form-show"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_login_submit'];?>
<i class="fa fa-user"></i></a></li>
    <li><a href="<?php echo smarty_function_router(array('page'=>'registration'),$_smarty_tpl);?>
" class="js-registration-form-show"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration_submit'];?>
<i class="fa fa-user-plus"></i></a></li>
    <li><a href="#" onclick="wide(); return false;" class="widemode" id="wide">Широкий режим<img style="margin-top: -5px;width: 30px;float: right;margin-right: -5px;" src="<?php echo smarty_function_cfg(array('name'=>"path.static.skin"),$_smarty_tpl);?>
/images/wide_mode.png"></img></a></li>
    <?php }?>

</ul>
</nav>
<script>
    function wide(){
        var gifs = document.getElementById('sidebar');
        var element = document.getElementById('content');
        element.style.width = "100%";
        element.style.margin = "0px";
        gifs.style.display = "none";
        var el = document.getElementById("wide")
        el.innerHTML = 'Стандартный режим<img style="margin-top: -5px;width: 30px;float: right;margin-right: -5px;" src="<?php echo smarty_function_cfg(array('name'=>"path.static.skin"),$_smarty_tpl);?>
/images/standart_mode.png"></img>'
        el.onclick=function(){dewide(); return false;}
    }
    function dewide(){
        var gifs = document.getElementById('sidebar');
        var element = document.getElementById('content');
        element.style.width = "70%";
        element.style.margin = "";
        gifs.style.display = "";
        var el = document.getElementById("wide")
        el.innerHTML = 'Широкий режим<img style="margin-top: -5px;width: 30px;float: right;margin-right: -5px;" src="<?php echo smarty_function_cfg(array('name'=>"path.static.skin"),$_smarty_tpl);?>
/images/wide_mode.png"></img>'
        el.onclick=function(){wide(); return false;}
    }
</script>
<?php }} ?>