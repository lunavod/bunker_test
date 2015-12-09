{include file='header.tpl'}
{assign var="oUserOwner" value=$oBlog->getOwner()}
{assign var="oVote" value=$oBlog->getVote()}


<script type="text/javascript">
	jQuery(function($){
		ls.lang.load({lang_load name="blog_fold_info,blog_expand_info"});
	});
</script>


{if $oUserCurrent and $oUserCurrent->isAdministrator()}
	<div id="blog_delete_form" class="modal">
		<header class="modal-header">
			<h3>{$aLang.blog_admin_delete_title}</h3>
			<a href="#" class="close jqmClose"></a>
		</header>
		
		
		<form action="{router page='blog'}delete/{$oBlog->getId()}/" method="POST" class="modal-content">
			<p><label for="topic_move_to">{$aLang.blog_admin_delete_move}:</label>
			<select name="topic_move_to" id="topic_move_to" class="input-width-full">
				<option value="-1">{$aLang.blog_delete_clear}</option>
				{if $aBlogs}
					<optgroup label="{$aLang.blogs}">
						{foreach from=$aBlogs item=oBlogDelete}
							<option value="{$oBlogDelete->getId()}">{$oBlogDelete->getTitle()|escape:'html'}</option>
						{/foreach}
					</optgroup>
				{/if}
			</select></p>
			
			<input type="hidden" value="{$LIVESTREET_SECURITY_KEY}" name="security_ls_key" />
			<button type="submit" class="button button-primary">{$aLang.blog_delete}</button>
		</form>
	</div>
{/if}



<div class="blog">
	<header class="blog-header">
		<div id="vote_area_blog_{$oBlog->getId()}" class="vote {if $oBlog->getRating() > 0}vote-count-positive{elseif $oBlog->getRating() < 0}vote-count-negative{/if} {if $oVote} voted {if $oVote->getDirection()>0}voted-up{elseif $oVote->getDirection()<0}voted-down{/if}{/if}">
			<div class="vote-label">Рейтинг</div>
			<a href="#" class="vote-up" onclick="return ls.vote.vote({$oBlog->getId()},this,1,'blog');"><i class="fa fa-chevron-up"></i></a>
			<a href="#" class="vote-down" onclick="return ls.vote.vote({$oBlog->getId()},this,-1,'blog');"><i class="fa fa-chevron-down"></i></a>
			<div id="vote_total_blog_{$oBlog->getId()}" class="vote-count count" title="{$aLang.blog_vote_count}: {$oBlog->getCountVote()}">{if $oBlog->getRating() > 0}+{/if}{$oBlog->getRating()}</div>
		</div>
		
		
		<img src="{$oBlog->getAvatarPath(48)}" alt="avatar" class="avatar" />
		
		
		<h2>{if $oBlog->getType()=='close'}<i title="{$aLang.blog_closed}" class="icon icon-lock"></i> {/if}{$oBlog->getTitle()|escape:'html'}</h2>
		
		
		<ul class="actions">
			<li><a href="{router page='rss'}blog/{$oBlog->getUrl()}/" class="rss">RSS</a></li>
			{if $oUserCurrent and $oUserCurrent->getId()!=$oBlog->getOwnerId()}
<li><a href="#" onclick="ls.blog.toggleJoin(this,{$oBlog->getId()}); return false;" class="link-dotted">{if $oBlog->getUserIsJoin()}{$aLang.blog_leave}{elseif $oBlog->getType()!="close"}{$aLang.blog_join}{/if}</a></li>
			{/if}
			{if $oUserCurrent and $oUserCurrent->getId()!=$oBlog->getOwnerId() and $oBlog->getType()=="close" and !$oBlog->getUserIsJoin()}
			<li><a href="#" onclick="askInvite({$oBlog->getId()}, [{$oBlog->getOwnerId()}{foreach from=$aBlogAdministrators item=oBlogUser}{assign var="oUser" value=$oBlogUser->getUser()}, {$oUser->getId()}{/foreach}])">Попросить инвайт</a></li>
			{/if}
			{if $oUserCurrent and ($oUserCurrent->getId()==$oBlog->getOwnerId() or $oUserCurrent->isAdministrator() or $oBlog->getUserIsAdministrator() )}
				<li>
					<a href="{router page='blog'}edit/{$oBlog->getId()}/" title="{$aLang.blog_edit}" class="edit">{$aLang.blog_edit}</a></li>
					{if $oUserCurrent->isAdministrator()}
						<li><a href="#" title="{$aLang.blog_delete}" id="blog_delete_show" class="delete">{$aLang.blog_delete}</a>
					{else}
						<a href="{router page='blog'}delete/{$oBlog->getId()}/?security_ls_key={$LIVESTREET_SECURITY_KEY}" title="{$aLang.blog_delete}" onclick="return confirm('{$aLang.blog_admin_delete_confirm}');" >{$aLang.blog_delete}</a>
					{/if}
				</li>
			{/if}
		</ul>
	</header>
	
	
	<div class="blog-more-content" id="blog-more-content" style="display: none;">
		<div class="blog-content">
			<p class="blog-description">{$oBlog->getDescription()}</p>
		</div>
		
		
		<footer class="blog-footer">
			{hook run='blog_info_begin' oBlog=$oBlog}
			<strong>{$aLang.blog_user_administrators} ({$iCountBlogAdministrators}):</strong>							
			<a href="{$oUserOwner->getUserWebPath()}" class="user"><i class="icon-user"></i>{$oUserOwner->getLogin()}</a>
			{if $aBlogAdministrators}			
				{foreach from=$aBlogAdministrators item=oBlogUser}
					{assign var="oUser" value=$oBlogUser->getUser()}  									
					<a href="{$oUser->getUserWebPath()}" class="user"><i class="icon-user"></i>{$oUser->getLogin()}</a>
				{/foreach}
			{/if}
			<br />

			
			<strong>{$aLang.blog_user_moderators} ({$iCountBlogModerators}):</strong>
			{if $aBlogModerators}						
				{foreach from=$aBlogModerators item=oBlogUser}  
					{assign var="oUser" value=$oBlogUser->getUser()}									
					<a href="{$oUser->getUserWebPath()}" class="user"><i class="icon-user"></i>{$oUser->getLogin()}</a>
				{/foreach}							
			{else}
				{$aLang.blog_user_moderators_empty}
			{/if}<br />
			
			
			<strong>{$aLang.blog_user_readers} ({$iCountBlogUsers}):</strong>
			{if $aBlogUsers}
				{foreach from=$aBlogUsers item=oBlogUser}
					{assign var="oUser" value=$oBlogUser->getUser()}
					<a href="{$oUser->getUserWebPath()}" class="user"><i class="icon-user"></i>{$oUser->getLogin()}</a>
				{/foreach}
				
				{if count($aBlogUsers) < $iCountBlogUsers}
					<br /><a href="{$oBlog->getUrlFull()}users/">{$aLang.blog_user_readers_all}</a>
				{/if}
			{else}
				{$aLang.blog_user_readers_empty}
			{/if}
			{hook run='blog_info_end' oBlog=$oBlog}
		</footer>
	</div>
	
	<a href="#" class="blog-more" id="blog-more" onclick="return ls.blog.toggleInfo()">{$aLang.blog_expand_info}</a>
</div>

{hook run='blog_info' oBlog=$oBlog}




{if $bCloseBlog}
	{$aLang.blog_close_show}
{else}
	{include file='topic_list.tpl'}
{/if}
{literal}
<script>
function askInvite(blog, to){
	$.post(DIR_WEB_ROOT + '/api/', {"blog": blog, "to": to},
        function(data){
            if (data) {
                ls.msg.notice("Вы отправили просьбу об инвайте", "");
            } else {
                ls.msg.error("Упс!", "Что-то пошло не так...");
            }
        }, "json");
}
{/literal}
</script>
{include file='footer.tpl'}
