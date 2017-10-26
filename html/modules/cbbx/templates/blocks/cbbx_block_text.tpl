<{foreach item=topic from=$block.topics}>
    <div><strong><a href="<{$smarty.const.CBBX_URL}>/viewtopic.php?forum=<{$topic.forum_id}>&amp;post_id=<{$topic.post_id}>#forumpost<{$topic.post_id}>"><{$topic.title}></a></strong></div>
    <div>
        <a href="<{$smarty.const.CBBX_URL}>/viewforum.php?forum=<{$topic.forum_id}>"><{$topic.forum_name}></a> 
        <{$topic.topic_poster}> <{$topic.time}>
    </div>
    <div style="padding: 5px 0px 10px 0px;"><{$topic.post_text}></div>
<{/foreach}>

<{if $block.indexNav}>
    <div style="text-align:right; padding: 5px;">
        <a href="<{$smarty.const.CBBX_URL}>/viewpost.php"><{$smarty.const._MB_CBBX_ALLPOSTS}></a> |
        <a href="<{$smarty.const.CBBX_URL}>/"><{$smarty.const._MB_CBBX_VSTFRMS}></a>
    </div>
<{/if}>