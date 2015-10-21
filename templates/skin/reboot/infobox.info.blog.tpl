{$aLang.infobox_blog_create} &mdash; {$oBlog->getDateAdd()}<br/>
{$aLang.infobox_blog_topics} &mdash; {$oBlog->getCountTopic()}<br/>
{$aLang.infobox_blog_users} &mdash; {$oBlog->getCountUser()}<br/>
{$aLang.infobox_blog_rating} &mdash; {$oBlog->getRating()}<br/>
{$aLang.infobox_blog_limit_rating} &mdash; {$oBlog->getLimitRatingTopic()}<br/>

{if $oTopicLast}
	<br/>
	{$aLang.infobox_blog_topic_last}:<br/>
	<a href="{$oTopicLast->getUrl()}">{$oTopicLast->getTitle()|escape:'html'}</a>
{/if}

<br/>
<br/>
<a href="{$oBlog->getUrlFull()}">{$aLang.infobox_blog_url}</a><br/>
<a href="{router page='rss'}blog/{$oBlog->getUrl()}/">{$aLang.infobox_blog_rss}</a><br/>https://4.downloader.disk.yandex.ru/preview/324d7d79372a0caf1593b36c8f6dc0b8c3a73ab1188c5f3d050e4be969df9a31/inf/pfDA4OhAz--54f_q6aJpudh24SLt_YMbMgisYHZ0flXwhN5bbKj6pRWNte22q3zpsEDnX-BXimN_SNoYYrPsrA%3D%3D?uid=302464543&filename=2015-07-11%2018-05-01%20%D0%A1%D0%BA%D1%80%D0%B8%D0%BD%D1%88%D0%BE%D1%82%20%D1%8D%D0%BA%D1%80%D0%B0%D0%BD%D0%B0.png&disposition=inline&hash=&limit=0&content_type=image%2Fpng&tknv=v2&size=1165x756