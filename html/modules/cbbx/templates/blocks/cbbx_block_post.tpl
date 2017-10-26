<table class="outer" cellspacing="1">
  <{if $block.disp_mode == 0}>
    <tr>
      <th class="head" nowrap="nowrap"><{$smarty.const._MB_CBBX_FORUM}></th>
      <th class="head" nowrap="nowrap"><{$smarty.const._MB_CBBX_TITLE}></th>
      <th class="head" align="center" nowrap="nowrap"><{$smarty.const._MB_CBBX_AUTHOR}></th>
    </tr>
    <{foreach item=topic from=$block.topics}>
      <tr class="<{cycle values="even,odd"}>">
        <td><a href="<{$smarty.const.CBBX_URL}>/viewforum.php?forum=<{$topic.forum_id}>"><{$topic.forum_name}></a></td>
        <td><a href="<{$smarty.const.CBBX_URL}>/viewtopic.php?forum=<{$topic.forum_id}>&amp;post_id=<{$topic.post_id}>#forumpost<{$topic.post_id}>"><{$topic.title}></a></td>
        <td align="right"><{$topic.time}><br /><{$topic.topic_poster}></td>
      </tr>
    <{/foreach}>
  <{elseif $block.disp_mode == 1}>
    <tr>
      <th class="head" nowrap="nowrap"><{$smarty.const._MB_CBBX_TOPIC}></th>
      <th class="head" align="center" nowrap="nowrap"><{$smarty.const._MB_CBBX_AUTHOR}></th>
    </tr>
    <{foreach item=topic from=$block.topics}>
      <tr class="<{cycle values="even,odd"}>">
        <td><a href="<{$smarty.const.CBBX_URL}>/viewtopic.php?forum=<{$topic.forum_id}>&amp;post_id=<{$topic.post_id}>#forumpost<{$topic.post_id}>"><{$topic.title}></a></td>
        <td align="right"><{$topic.time}><br /><{$topic.topic_poster}></td>
      </tr>
    <{/foreach}>
  <{elseif $block.disp_mode == 2}>
    <{foreach item=topic from=$block.topics}>
      <tr class="<{cycle values="even,odd"}>">
        <td><a href="<{$smarty.const.CBBX_URL}>/viewtopic.php?forum=<{$topic.forum_id}>&amp;post_id=<{$topic.post_id}>#forumpost<{$topic.post_id}>"><{$topic.title}></a></td>
      </tr>
    <{/foreach}>
  <{else}>
    <tr><td>
      <{foreach item=topic from=$block.topics}>
        <div><strong><a href="<{$smarty.const.CBBX_URL}>/viewtopic.php?forum=<{$topic.forum_id}>&amp;post_id=<{$topic.post_id}>#forumpost<{$topic.post_id}>"><{$topic.title}></a></strong></div>
        <div>
          <a href="<{$smarty.const.CBBX_URL}>/viewforum.php?forum=<{$topic.forum_id}>"><{$topic.forum_name}></a> | 
          <{$topic.topic_poster}> | <{$topic.time}>
        </div>
        <div style="padding: 5px 0px 10px 0px;"><{$topic.post_text}></div>
      <{/foreach}>
    </td></tr>
  <{/if}>
</table>

<{if $block.indexNav}>
  <div style="text-align:right; padding: 5px;">
    <a href="<{$smarty.const.CBBX_URL}>/viewpost.php"><{$smarty.const._MB_CBBX_ALLPOSTS}></a> |
    <a href="<{$smarty.const.CBBX_URL}>/"><{$smarty.const._MB_CBBX_VSTFRMS}></a>
  </div>
<{/if}>