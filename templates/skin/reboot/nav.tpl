<nav id="nav">
	<ul class="nav nav-main">
		<li {if $sMenuItemSelect=='feed'}class="active"{/if}><a href="{router page='feed'}">{$aLang.userfeed_title}</a></li>
		<li {if $sMenuHeadItemSelect=='blog'}class="active"{/if}><a href="{cfg name='path.root.web'}">{$aLang.topic_title}</a></li>
		<li {if $sMenuHeadItemSelect=='blogs'}class="active"{/if}><a href="{router page='blogs'}">{$aLang.blogs}</a></li>
		<li {if $sMenuHeadItemSelect=='people'}class="active"{/if}><a href="{router page='people'}">{$aLang.people}</a></li>
		<li {if $sMenuHeadItemSelect=='stream'}class="active"{/if}><a href="{router page='stream'}">{$aLang.stream_menu}</a></li>
		<li><a href="http://freepony.ru/">{$aLang.freepony}</a></li>

		{hook run='main_menu_item'}
		<li class="quote" style="float: left;">
		<a href="#" style="padding-top: 3px; padding-bottom" 0px;>
<img src="{cfg name="path.static.skin"}/images/woona.gif">
</a>
</li>	
	<li class="quote" style="float: left;">
		<a href="#">
		<h1>
		<em>
{include file="quote.php"}
</em>
</h1>
</a>
</li>
<li style="float: left;">
		<a href="{cfg name='path.root.web'}/episodes"> <p id="nextepisode">Время, оставшееся до новой серии</p>
</a>
		</li>
	</ul>
	{hook run='main_menu'}
</nav>