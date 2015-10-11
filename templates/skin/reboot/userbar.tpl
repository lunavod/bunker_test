<input type="checkbox" id="hmt" class="hidden-menu-ticker">
<label class="btn-menu" for="hmt">
    <span class="first"></span>
    <span class="second"></span>
    <span class="third"></span>
    <a href="/">
        <img src="{cfg name="path.static.skin"}/logo.png" class="logo">
    </a>
</label>

<ul class="nav nav-userbar hidden-menu">
    <a href="/">
    </a>
    {if $oUserCurrent}
    <li class="nav-userbar-username">
        <a href="{$oUserCurrent->getUserWebPath()}" class="username">
            {$oUserCurrent->getLogin()}
            <img src="{$oUserCurrent->getProfileAvatarPath(24)}" alt="avatar" class="avatar" />
        </a>
    </li>
    <li><a href="{router page='topic'}add/" class="write" id="modal_write_show">{$aLang.block_create}<i class="fa fa-pencil-square-o"></i></a></li>
    <li><a href="{$oUserCurrent->getUserWebPath()}favourites/topics/">{$aLang.user_menu_profile_favourites}<i class="fa fa-star-half-o"></i></a></li>
    <li><a href="{router page='talk'}" {if $iUserCurrentCountTalkNew}class="new-messages"{/if} id="new_messages" title="{if $iUserCurrentCountTalkNew}{$aLang.user_privat_messages_new}{/if}">{$aLang.user_privat_messages}{if $iUserCurrentCountTalkNew} ({$iUserCurrentCountTalkNew}){/if}<i class="fa fa-envelope-o"></i></a></li>
    <li><a href="{router page='settings'}profile/">{$aLang.user_settings}<i class="fa fa-cogs"></i></a></li>
    {hook run='userbar_item'}
    <li><a href="#" onclick="wide(); return false;" class="widemode" id="wide">Широкий режим<img style="margin-top: -5px;width: 30px;float: right;margin-right: -5px;" src="{cfg name="path.static.skin"}/images/wide_mode.png"></img></a></li>
    <li style="bottom: 0px;"><a href="{router page='login'}exit/?security_ls_key={$LIVESTREET_SECURITY_KEY}">{$aLang.exit}<i class="fa fa-times-circle-o"></i></a></li>
    {else}
    {hook run='userbar_item'}
    <li><a href="{router page='login'}" class="js-login-form-show">{$aLang.user_login_submit}<i class="fa fa-user"></i></a></li>
    <li><a href="{router page='registration'}" class="js-registration-form-show">{$aLang.registration_submit}<i class="fa fa-user-plus"></i></a></li>
    <li><a href="#" onclick="wide(); return false;" class="widemode" id="wide">Широкий режим<img style="margin-top: -5px;width: 30px;float: right;margin-right: -5px;" src="{cfg name="path.static.skin"}/images/wide_mode.png"></img></a></li>
    {/if}

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
        el.innerHTML = 'Стандартный режим<img style="margin-top: -5px;width: 30px;float: right;margin-right: -5px;" src="{cfg name="path.static.skin"}/images/standart_mode.png"></img>'
        el.onclick=function(){literal}{dewide(); return false;}{/literal}
    }
    function dewide(){
        var gifs = document.getElementById('sidebar');
        var element = document.getElementById('content');
        element.style.width = "70%";
        element.style.margin = "";
        gifs.style.display = "";
        var el = document.getElementById("wide")
        el.innerHTML = 'Широкий режим<img style="margin-top: -5px;width: 30px;float: right;margin-right: -5px;" src="{cfg name="path.static.skin"}/images/wide_mode.png"></img>'
        el.onclick=function(){literal}{wide(); return false;}{/literal}
    }
</script>
