<section class="toolbar-up" id="toolbar_up">
	<a href="#" style="margin-top: 30px;" onclick="$.scrollTo(0, 500); return false;" title="{$aLang.toolbar_scrollup_go}" class="toolbar-topic-prev"><i class="fa fa-chevron-up"></i></a>
</section>
<section class="toolbar-down" id="toolbar_down">
	<a href="#" onclick="{literal}$('html, body').animate({scrollTop:$(document).height()}, 'slow');{/literal}  return false;" title="{$aLang.toolbar_scrollup_go}" class="toolbar-topic-prev"><i class="fa fa-chevron-down"></i></a>
</section>
