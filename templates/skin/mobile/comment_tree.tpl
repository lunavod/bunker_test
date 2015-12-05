{if $oUserCurrent}
	{assign var=aPagingCmt value=$params.aPagingCmt}
	<section class="toolbar-update" id="update" style="{if $aPagingCmt and $aPagingCmt.iCountPage > 1}display: none;{/if}">
		<a href="#" class="update-comments" id="update-comments" onclick="ls.comments.load({$iTargetId},'{$sTargetType}'); return false;"><i></i></a>
		<a href="#" class="new-comments" id="new_comments_counter" style="display: none;" title="{$aLang.comment_count_new}" onclick="ls.comments.goToNextComment(); return false;"></a>

		<input type="hidden" id="comment_last_id" value="{$iMaxIdComment}" />
		<input type="hidden" id="comment_use_paging" value="{if $aPagingCmt and $aPagingCmt.iCountPage>1}1{/if}" />
	</section>
{/if}


{hook run='comment_tree_begin' iTargetId=$iTargetId sTargetType=$sTargetType}
<div class="comments" id="comments">
	<header class="comments-header clearfix">
		<h3>{$aLang.comment_number} &mdash; <span id="count-comments">{$iCountComment}</span></h3>
		
		{if $bAllowSubscribe and $oUserCurrent}
			<div class="comments-subscribe">
				<input {if $oSubscribeComment and $oSubscribeComment->getStatus()}checked="checked"{/if} type="checkbox" id="comment_subscribe" class="input-checkbox" onchange="ls.subscribe.toggle('{$sTargetType}_new_comment','{$iTargetId}','',this.checked);">
				<label for="comment_subscribe">{$aLang.comment_subscribe}</label>
			</div>
		{/if}
	
		<a name="comments"></a>
	</header>


	{assign var="nesting" value="-1"}
	{foreach from=$aComments item=oComment name=rublist}
		{assign var="cmtlevel" value=$oComment->getLevel()}
		
		{if $cmtlevel>$oConfig->GetValue('module.comment.max_tree')}
			{assign var="cmtlevel" value=$oConfig->GetValue('module.comment.max_tree')}
		{/if}
		
		{if $nesting < $cmtlevel} 
		{elseif $nesting > $cmtlevel}    	
			{section name=closelist1  loop=$nesting-$cmtlevel+1}</div>{/section}
		{elseif not $smarty.foreach.rublist.first}
			</div>
		{/if}
		
		<div class="comment-wrapper" id="comment_wrapper_id_{$oComment->getId()}">
		
		{include file='comment.tpl'} 
		{assign var="nesting" value=$cmtlevel}
		{if $smarty.foreach.rublist.last}
			{section name=closelist2 loop=$nesting+1}</div>{/section}    
		{/if}
	{/foreach}
</div>				
	
	
{include file='comment_paging.tpl' aPagingCmt=$aPagingCmt}

{hook run='comment_tree_end' iTargetId=$iTargetId sTargetType=$sTargetType}

{if $bAllowNewComment}
	{$sNoticeNotAllow}
{else}
	{if $oUserCurrent}
		{*{include file='editor.tpl' sImgToLoad='form_comment_text' sSettingsTinymce='ls.settings.getTinymceComment()' sSettingsMarkitup='ls.settings.getMarkitupComment()'}*}

		<h4 class="reply-header" id="comment_id_0">
			<a href="#" class="button" onclick="ls.comments.toggleCommentForm(0); return false;">{$sNoticeCommentAdd}</a>
		</h4>
		
		
		<div id="reply" class="reply">		
			<form method="post" id="form_comment" onsubmit="return false;" enctype="multipart/form-data">
				{hook run='form_add_comment_begin'}
				
				<textarea name="comment_text" id="form_comment_text" class="mce-editor markitup-editor input-width-full"></textarea>
				
				{hook run='form_add_comment_end'}
				
				<button type="submit" name="submit_comment" 
						id="comment-button-submit" 
						onclick="ls.comments.add('form_comment',{$iTargetId},'{$sTargetType}'); return false;" 
						class="button button-primary">{$aLang.comment_add}</button>
				{*<button type="button" onclick="ls.comments.preview();" class="button">{$aLang.comment_preview}</button>*}
				
				<input type="hidden" name="reply" value="0" id="form_comment_reply" />
				<input type="hidden" name="cmt_target_id" value="{$iTargetId}" />
			</form>
		</div>
	{else}
		{$aLang.comment_unregistered}
	{/if}
{/if}	

