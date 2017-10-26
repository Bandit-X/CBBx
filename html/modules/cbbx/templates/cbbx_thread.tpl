<a id="forumpost<{$topic_post.post_id}>"></a>
<table class="outer" cellpadding="0" cellspacing="0" border="0" width="100%" align="center" style="border-bottom-width: 0px;">
  <tr>
       <th width="20%" align="left">
       <div class="comUserName"><{$topic_post.poster.link}></div>
   	</th>

    <th width="75%" align="left"><div class="comTitle"><{$topic_post.post_title}></div></th>
    <th align="right"><div class="comTitle" style="float: right;"><a href="<{$smarty.const.CBBX_URL}>/viewtopic.php?post_id=<{$topic_post.post_id}>#forumpost<{$topic_post.post_id}>">#<{$topic_post.post_no}></a></div></th>
  </tr>

  <tr>
  	<td width="20%" class="odd" rowspan="2" valign="top">
  	<{if $topic_post.poster.uid != 0}>
  	<div class="comUserRankText"><{$topic_post.poster.rank.title}><br /><{$topic_post.poster.rank.image}></div>
  	<{if $topic_post.poster.avatar}>
  	<img class="comUserImg" src="<{$xoops_upload_url}>/<{$topic_post.poster.avatar}>" alt="" />
  	<{/if}>
  	<div class="comUserStat"><span class="comUserStatCaption"><{$smarty.const._MD_CBBX_JOINED}>:</span><br /><{$topic_post.poster.regdate}></div>
  	<{if $topic_post.poster.from}>
  	<div class="comUserStat"><span class="comUserStatCaption"><{$smarty.const._MD_CBBX_FROM}></span> <{$topic_post.poster.from}></div>
  	<{/if}>
	<{if $topic_post.poster.groups}>
  	<div class="comUserStat"> <span class="comUserStatCaption"><{$smarty.const._MD_CBBX_GROUP}></span>
  	<{foreach item=group from=$topic_post.poster.groups}> <br /><{$group}><{/foreach}>
  	</div>
	<{/if}>
  	<div class="comUserStat"><span class="comUserStatCaption"><{$smarty.const._MD_CBBX_POSTS}>:</span> 
  	<{if $topic_post.poster.posts gt 0}>
  	<a href="<{$smarty.const.CBBX_URL}>/viewpost.php?uid=<{$topic_post.poster.uid}>" title="<{$smarty.const._ALL}>" target="_self"><{$topic_post.poster.posts}></a>
  	<{else}>
  	0
  	<{/if}>
  	</div>
  	<{if $topic_post.poster.level}>
  	<div class="comUserStat"><{$topic_post.poster.level}></div>
  	<{/if}>
  	<{if $topic_post.poster.status}>
  	<div class="comUserStatus"><{$topic_post.poster.status}></div>
  	<{/if}>
	<{else}>
   	<div class="comUserRankText"><{$anonymous_prefix}><{$topic_post.poster.name}></div>
	<{/if}>
	</td>

    <td colspan="2" class="odd">
    <div class="comText"><{$topic_post.post_text}></div>
	<{if $topic_post.post_attachment}>
	<div class="comText"><{$topic_post.post_attachment}></div>
	<{/if}>
	<div class="clear"></div>
    <br />
    <div style="float: right; padding: 5px; margin-top: 10px;">
	<{if $topic_post.poster_ip}>
	IP: <a href="http://www.whois.sc/<{$topic_post.poster_ip}>" target="_blank"><{$topic_post.poster_ip}></a> |
	<{/if}>
    <{$smarty.const._MD_CBBX_POSTEDON}><{$topic_post.post_date}></div>
	<{if $topic_post.post_edit}>
	<div class="clear"></div>
    <br />
	<div style="float: right; padding: 5px; margin-top: 10px;"><small><{$topic_post.post_edit}></small></div>
	<{/if}>
	</td>
  </tr>

  <tr>
    <td colspan="2" class="odd" valign="bottom">
	<{if $topic_post.post_signature}>
    <div class="signature">
	_________________<br />
	<{$topic_post.post_signature}>
	</div>
	<{/if}>
	</td>
  </tr>

  <tr>
    <td width="20%" class="foot">
	<a href="<{$smarty.const.CBBX_URL}>/action.transfer.php?post_id=<{$topic_post.post_id}>" target="_blank" title="<{$smarty.const._MD_CBBX_TRANSFER_DESC}>"><img src="<{$smarty.const.CBBX_URL}>/images/external.png" alt="<{$smarty.const._MD_CBBX_TRANSFER_DESC}>" /> <{$smarty.const._MD_CBBX_TRANSFER}></a>
	</td>
    <td colspan="2" class="foot"><div align="right">
    <{if $mode gt 1}>
		<a href="<{$smarty.const.CBBX_URL}>/action.post.php?post_id=<{$topic_post.post_id}>&amp;op=split&amp;mode=1" target="_self" title="<{$smarty.const._MD_CBBX_SPLIT_ONE}>"><{$smarty.const._MD_CBBX_SPLIT_ONE}></a> | 
		<a href="<{$smarty.const.CBBX_URL}>/action.post.php?post_id=<{$topic_post.post_id}>&amp;op=split&amp;mode=2" target="_self" title="<{$smarty.const._MD_CBBX_SPLIT_TREE}>"><{$smarty.const._MD_CBBX_SPLIT_TREE}></a> | 
		<a href="<{$smarty.const.CBBX_URL}>/action.post.php?post_id=<{$topic_post.post_id}>&amp;op=split&amp;mode=3" target="_self" title="<{$smarty.const._MD_CBBX_SPLIT_ALL}>"><{$smarty.const._MD_CBBX_SPLIT_ALL}></a> | 
		<input type="checkbox" name="post_id[]" id="post_id[<{$topic_post.post_id}>]" value="<{$topic_post.post_id}>" />
    <{else}>
    	<{foreach item=btn from=$topic_post.thread_buttons}> <a href="<{$btn.link}>&amp;post_id=<{$topic_post.post_id}>" title="<{$btn.name}>"> <{$btn.image}></a> <{/foreach}>
    <{/if}>
    <a href="#threadtop" title="<{$smarty.const._MD_CBBX_UP}>"> <{$p_up}></a>
    </div>
    </td>
  </tr>
</table>