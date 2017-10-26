<table class="outer" cellspacing="1">
  <{if $block.disp_mode == 0}>
    <tr>
      <th class="head" nowrap="nowrap"><{$smarty.const._MB_CBBX_FORUM}></th>
      <th class="head" nowrap="nowrap"><{$smarty.const._MB_CBBX_TITLE}></th>
      <th class="head" align="center" nowrap="nowrap"><{$smarty.const._MB_CBBX_RPLS}></th>
      <th class="head" align="center" nowrap="nowrap"><{$smarty.const._MB_CBBX_VIEWS}></th>
      <th class="head" align="center" nowrap="nowrap"><{$smarty.const._MB_CBBX_AUTHOR}></th>
    </tr>
    <{foreach item=topic from=$block.topics}>
      <tr class="<{cycle values="even,odd"}>">
        <td><a href="<{$smarty.const.CBBX_URL}>/viewforum.php?forum=<{$topic.forum_id}>"><{$topic.forum_name}></a></td>
        <td><a href="<{$smarty.const.CBBX_URL}>/viewtopic.php?topic_id=<{$topic.id}>&amp;forum=<{$topic.forum_id}>">
     <{if $topic.topic_subject}>
        <{$topic.topic_subject}>
      <{/if}>
      <{$topic.title}></a>
      </td>
        <td align="center"><{$topic.replies}></td>
        <td align="center"><{$topic.views}></td>
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
        <td><a href="<{$smarty.const.CBBX_URL}>/viewtopic.php?topic_id=<{$topic.id}>&amp;forum=<{$topic.forum_id}>">
        <{if $topic.topic_subject}>
          <{$topic.topic_subject}>
        <{/if}>
        <{$topic.title}></a><{$topic.topic_page_jump}>
      </td>
        <td align="right"><{$topic.time}><br /><{$topic.topic_poster}></td>
      </tr>
    <{/foreach}>
  <{elseif $block.disp_mode == 2}>
    <{foreach item=topic from=$block.topics}>
      <tr class="<{cycle values="even,odd"}>">
        <td><a href="<{$smarty.const.CBBX_URL}>/viewtopic.php?topic_id=<{$topic.id}>&amp;forum=<{$topic.forum_id}>">
        <{if $topic.topic_subject}>
          <{$topic.topic_subject}>
        <{/if}>
        <{$topic.title}></a>
      </td>
      </tr>
    <{/foreach}>
  <{/if}>
</table>

<{if $block.indexNav}>
  <div style="text-align:right; padding: 5px;">
    <a href="<{$smarty.const.CBBX_URL}>/viewall.php"><{$smarty.const._MB_CBBX_ALLTOPICS}></a> |
    <a href="<{$smarty.const.CBBX_URL}>/"><{$smarty.const._MB_CBBX_VSTFRMS}></a>
  </div>
<{/if}>