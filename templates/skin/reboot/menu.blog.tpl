<div class="nav-filter-wrapper">
	<ul class="nav nav-filter">
		<li {if $sMenuItemSelect=='index'}class="active"{/if}>
			<a href="{cfg name='path.root.web'}/">{$aLang.blog_menu_all}</a> {if $iCountTopicsNew>0}<a href="{router page='index'}new/" class="new">+{$iCountTopicsNew}</a>{/if}
		</li>
		{if $oUserCurrent}
			<li {if $sMenuItemSelect=='feed'}class="active"{/if}>
				<a href="{router page='feed'}">{$aLang.userfeed_title}</a>
			</li>
		{/if}

		{hook run='menu_blog'}
	</ul>

</div>