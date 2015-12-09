			{hook run='content_end'}
		</div> <!-- /content -->
	</div> <!-- /wrapper -->


	<footer id="footer">
		<img src="{cfg name="path.static.skin"}/images/dark-to-day.png" onclick="bunkerStyle()" align="center" title="Светлый режим/темный режим" style="cursor: pointer" />
</footer>

</div> <!-- /container -->

{include file='toolbar.tpl'}
<script src="{cfg name="path.static.skin"}/js/clock.js">

{hook run='body_end'}
<script>
function bunkerStyle() {
        var date = new Date;
        date.setDate(date.getDate() + 100);
        if(getCookie("SiteStyle") == "Dark") {
                document.cookie = "SiteStyle=Light; path=/; expires=" + date.toUTCString();
                location.reload();
        } else {
                if(getCookie("SiteStyle") == "Light") {
                        document.cookie = "SiteStyle=Dark; path=/; expires=" + date.toUTCString();
                        location.reload();
                } else {
                        document.cookie = "SiteStyle=Dark; path=/; expires=" + date.toUTCString();
                        location.reload();
                }
        }
}
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
if(getCookie("SiteStyle") == "Dark") {
        document.write("<link rel='stylesheet' type='text/css' href='https:/reboot.lunavod.ru/plugins/theme/templates/skin/default/css/dark.css' />")
}
</script>
</body>
</html>
