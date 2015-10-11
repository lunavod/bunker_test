			{hook run='content_end'}
		</div> <!-- /content -->

		
		{if !$noSidebar && $sidebarPosition != 'left'}
			{include file='sidebar.tpl'}
		{/if}
	</div> <!-- /wrapper -->

	
	<footer id="footer">
		
		Пони. Пони захватывают мир.


	</footer>
</div> <!-- /container -->

{include file='toolbar.tpl'}
<script src="{cfg name="path.static.skin"}/js/clock.js">
{hook run='body_end'}
<script>
var allNew = document.querySelectorAll('.spoiler-title');
console.log(allNew)
idx=0
for(idx=0;idx<allNew.length;idx++){	
	allNew[idx].className="spoiler-title spoiler-close" 
}

var despoil = function() {
	var allBody = document.querySelectorAll('.spoiler-body');
	idx=0
	for(idx=0;idx<allBody.length;idx++){	
		allBody[idx].style.display="block" 
	}
	var allNew = document.querySelectorAll('.spoiler-title');
	idx=0
	for(idx=0;idx<allNew.length;idx++){	
		allNew[idx].className="spoiler-title spoiler-open" 
	}
}

var spoil = function() {
	var allBody = document.querySelectorAll('.spoiler-body');
	idx=0
	for(idx=0;idx<allBody.length;idx++){	
		allBody[idx].style.display="none" 
	}
	var allNew = document.querySelectorAll('.spoiler-title');
	idx=0
	for(idx=0;idx<allNew.length;idx++){	
		allNew[idx].className="spoiler-title spoiler-close" 
	}
}
</script>
</body>
</html>