<div style="padding: 5px;">
    <a id="forumpost<{$topic_post.post_id}>"></a>
        <div class="head" style="padding:5px;">
        <a href="<{$smarty.const.CBBX_URL}>/viewtopic.php?post_id=<{$topic_post.post_id}>#forumpost<{$topic_post.post_id}>">#<{$topic_post.post_no}></a> 
        <{$topic_post.post_title}>
    </div>

    <div class="even">
    <{$topic_post.poster.link}>
    <{if $topic_post.poster_ip}>
        IP: <a href="http://www.whois.sc/<{$topic_post.poster_ip}>" target="_blank"><{$topic_post.poster_ip}></a>
    <{/if}> 
    <{$smarty.const._MD_CBBX_POSTEDON}> <{$topic_post.post_date}>
    </div>

    <div class="odd" style="padding:5px;"><{$topic_post.post_text}></div>
    <{if $topic_post.post_attachment}>
        <div class="odd" style="padding:5px;"><{$topic_post.post_attachment}></div>
    <{/if}>

    <div class="foot">
    <{foreach item=btn from=$topic_post.thread_buttons}> <a href="<{$btn.link}>&amp;post_id=<{$topic_post.post_id}>" title="<{$btn.name}>"> <{$btn.image}></a> <{/foreach}>
        <a href="#threadtop" title="<{$smarty.const._MD_CBBX_UP}>"> <{$p_up}></a>
    </div>
</div>