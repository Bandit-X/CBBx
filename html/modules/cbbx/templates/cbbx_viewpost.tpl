
<div id="forum_header">
<div><{$folder_topic}> <a href="<{$smarty.const.CBBX_URL}>/index.php"><{$lang_forum_index}></a></div>

<{if $parent_forum}>
<div>&nbsp;&nbsp;<{$folder_topic}> <a href="<{$xsmarty.const.CBBX_URL}>/viewforum.php?forum=<{$parent_forum}>"><{$parent_name}></a></div>
<div>&nbsp;&nbsp;&nbsp;&nbsp;<{$folder_topic}> <a href="<{$smarty.const.CBBX_URL}>/viewforum.php?forum=<{$forum_id}>"><{$forum_name}></a></div>
<{elseif $forum_name}>
<div>&nbsp;&nbsp;<{$folder_topic}> <a href="<{$smarty.const.CBBX_URL}>/viewforum.php?forum=<{$forum_id}>"><{$forum_name}></a></div>
<{/if}>
<div>&nbsp;&nbsp; <{$post_content}> <strong><{$lang_title}></strong></div>
</div>
<div class="clear"></div>

<br />

<div style="padding: 5px;">
    <a id="threadtop"></a><{$down2}>&nbsp;<a href="#threadbottom"><{$smarty.const._MD_CBBX_BOTTOM}></a>&nbsp;&nbsp;<{$left}>&nbsp;<a href="viewtopic.php?viewmode=flat&amp;order=<{$order_current}>&amp;topic_id=<{$topic_id}>&amp;forum=<{$forum_id}>&amp;move=prev&amp;topic_time=<{$topic_time}>"><{$smarty.const._MD_CBBX_PREVTOPIC}></a>&nbsp;&nbsp;<{$right}>&nbsp;<a href="viewtopic.php?viewmode=flat&amp;order=<{$order_current}>&amp;topic_id=<{$topic_id}>&amp;forum=<{$forum_id}>&amp;move=next&amp;topic_time=<{$topic_time}>"><{$smarty.const._MD_CBBX_NEXTTOPIC}></a>
</div>

<br />
<div>
<div class="dropdown">
<{if $menumode eq 0}>

	<select
		name="topicoption" id="topicoption"
		class="menu"
		onchange="if(this.options[this.selectedIndex].value.length >0 )	{ window.document.location=this.options[this.selectedIndex].value;}"
	>
		<option value=""><{$smarty.const._MD_CBBX_TOPICOPTION}></option>
		<option value="<{$newpost_link}>"><{$smarty.const._MD_CBBX_VIEW}>&nbsp;<{$smarty.const._MD_CBBX_NEWPOSTS}></option>
		<option value="<{$all_link}>"><{$smarty.const._MD_CBBX_VIEW}>&nbsp;<{$smarty.const._MD_CBBX_ALL}></option>
		<option value="<{$digest_link}>"><{$smarty.const._MD_CBBX_VIEW}>&nbsp;<{$smarty.const._MD_CBBX_DIGEST}></option>
		<option value="<{$unreplied_link}>"><{$smarty.const._MD_CBBX_VIEW}>&nbsp;<{$smarty.const._MD_CBBX_UNREPLIED}></option>
		<option value="<{$unread_link}>"><{$smarty.const._MD_CBBX_VIEW}>&nbsp;<{$smarty.const._MD_CBBX_UNREAD}></option>
		<option value="">--------</option>
		<{foreach item=menu from=$menumode_other}>
		<option value="<{$menu.link}>"><{$menu.title}></option>
		<{/foreach}>
	</select>

	<select
		name="viewmode" id="viewmode"
		class="menu"
		onchange="if(this.options[this.selectedIndex].value.length >0 )	{ window.document.location=this.options[this.selectedIndex].value;}"
	>
		<option value=""><{$smarty.const._MD_CBBX_VIEWMODE}></option>
		<{foreach item=act from=$viewmode_options}>
		<option value="<{$act.link}>"><{$act.title}></option>
		<{/foreach}>
	</select>

<{elseif $menumode eq 1}>
	<div id="topicoption" class="menu">
	<table><tr><td>
		<a class="item" href="<{$newpost_link}>"><{$smarty.const._MD_CBBX_VIEW}>&nbsp;<{$smarty.const._MD_CBBX_NEWPOSTS}></a>
		<a class="item" href="<{$all_link}>"><{$smarty.const._MD_CBBX_VIEW}>&nbsp;<{$smarty.const._MD_CBBX_ALL}></a>
		<a class="item" href="<{$digest_link}>"><{$smarty.const._MD_CBBX_VIEW}>&nbsp;<{$smarty.const._MD_CBBX_DIGEST}></a>
		<a class="item" href="<{$unreplied_link}>"><{$smarty.const._MD_CBBX_VIEW}>&nbsp;<{$smarty.const._MD_CBBX_UNREPLIED}></a>
		<a class="item" href="<{$unread_link}>"><{$smarty.const._MD_CBBX_VIEW}>&nbsp;<{$smarty.const._MD_CBBX_UNREAD}></a>
		<div class="separator"></div>
		<{foreach item=menu from=$menumode_other}>
		<a class="item" href="<{$menu.link}>"><{$menu.title}></a>
		<{/foreach}>
	</td></tr></table>
	</div>
	<script type="text/javascript">document.getElementById("topicoption").onmouseout = closeMenu;</script>
	<div class="menubar"><a href="" onclick="openMenu(event, 'topicoption');return false;"><{$smarty.const._MD_CBBX_TOPICOPTION}></a></div>

	<div id="view_mode" class="menu">
	<table><tr><td>
		<{foreach item=act from=$viewmode_options}>
		<a class="item" href="<{$act.link}>"><{$act.title}></a>
		<{/foreach}>
	</td></tr></table>
	</div>
	<script type="text/javascript">document.getElementById("view_mode").onmouseout = closeMenu;</script>
	<div class="menubar"><a href="" onclick="openMenu(event, 'view_mode');return false;"><{$smarty.const._MD_CBBX_VIEWMODE}></a></div>

<{elseif $menumode eq 2}>
	<div class="menu">
		<ul>
			<li>
				<div class="item"><strong><{$smarty.const._MD_CBBX_VIEWMODE}></strong></div>
				<ul>
				<li><table><tr><td>
					<{foreach item=act from=$viewmode_options}>
					<div class="item"><a href="<{$act.link}>"><{$act.title}></a></div>
					<{/foreach}>
				</td></tr></table></li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="menu">
		<ul>
			<li>
				<div class="item"><strong><{$smarty.const._MD_CBBX_TOPICOPTION}></strong></div>
				<ul>
				<li><table><tr><td>
	                <div class="item"><a href="<{$newpost_link}>"><{$smarty.const._MD_CBBX_VIEW}>&nbsp;<{$smarty.const._MD_CBBX_NEWPOSTS}></a></div>
	                <div class="item"><a href="<{$all_link}>"><{$smarty.const._MD_CBBX_VIEW}>&nbsp;<{$smarty.const._MD_CBBX_ALL}></a></div>
	                <div class="item"><a href="<{$digest_link}>"><{$smarty.const._MD_CBBX_VIEW}>&nbsp;<{$smarty.const._MD_CBBX_DIGEST}></a></div>
	                <div class="item"><a href="<{$unreplied_link}>"><{$smarty.const._MD_CBBX_VIEW}>&nbsp;<{$smarty.const._MD_CBBX_UNREPLIED}></a></div>
	                <div class="item"><a href="<{$unread_link}>"><{$smarty.const._MD_CBBX_VIEW}>&nbsp;<{$smarty.const._MD_CBBX_UNREAD}></a></div>
					<div class="separator"></div>
					<{foreach item=menu from=$menumode_other}>
					<div class="item"><a href="<{$menu.link}>"><{$menu.title}></a></div>
					<{/foreach}>
				</td></tr></table></li>
				</ul>
			</li>
		</ul>
	</div>

<{/if}>
</div>
<div style="padding: 5px;float: right; text-align:right;">
<{$pagenav}>
</div>
</div>
<div class="clear"></div>
<br />
<br />

<{if $mode gt 1}>
<form name="form_posts_admin" action="action.post.php" method="POST" onsubmit="javascript: if(window.document.forum_posts_admin.op.value &lt; 1){return false;}">
<{/if}>

<{foreach item=post from=$posts}>
<{if $viewmode_compact}>
<{include file="$cbbx_template_path/cbbx_item.tpl" topic_post=$post}>
<{else}>
<{include file="$cbbx_template_path/cbbx_thread.tpl" topic_post=$post mode=$mode}>
<{/if}>
<div style="float:right;text-align:right; padding: 5px;">
<a href="viewtopic.php?topic_id=<{$post.topic_id}>"><strong><{$smarty.const._MD_CBBX_VIEWTOPIC}></strong></a>
<{if !$forum_name }>
 | <a href="viewforum.php?forum=<{$post.forum_id}>"><strong><{$smarty.const._MD_CBBX_VIEWFORUM}></strong></a>
<{/if}>
</div>
<div class="clear"></div>
<br />
<br />
<{/foreach}>

<{if $viewer_level gt 1}>
<div style="float: right; text-align:right;" id="admin">
<{if $mode gt 1}>
<{$smarty.const._ALL}>: <input type="checkbox" name="post_check" id="post_check" value="1" onclick="xoopsCheckAll('form_posts_admin', 'post_check');" /> 
<select name="op">
	<option value="0"><{$smarty.const._SELECT}></option>
	<option value="delete"><{$smarty.const._DELETE}></option>
	<{if $type eq "pending"}>
		<option value="approve"><{$smarty.const._MD_CBBX_APPROVE}></option>
	<{elseif $type eq "deleted"}>
		<option value="restore"><{$smarty.const._MD_CBBX_RESTORE}></option>
	<{/if}>
</select>
<input type="hidden" name="uid" value="<{$uid}>" /> | 
<input type="submit" name="submit" value="<{$smarty.const._SUBMIT}>" /> | 
<a href="<{$smarty.const.CBBX_URL}>/viewpost.php?uid=<{$uid}>&amp;mode=1#admin" target="_self" title="<{$smarty.const._MD_CBBX_TYPE_ADMIN}>"><{$smarty.const._MD_CBBX_TYPE_ADMIN}></a>
</form>
<{elseif $mode eq 1}>
<a href="<{$smarty.const.CBBX_URL}>/viewpost.php?uid=<{$uid}>&amp;type=active#admin" target="_self" title="<{$smarty.const._MD_CBBX_TYPE_ADMIN}>"><{$smarty.const._MD_CBBX_TYPE_ADMIN}></a> | 
<a href="<{$smarty.const.CBBX_URL}>/viewpost.php?uid=<{$uid}>&amp;type=pending#admin" target="_self" title="<{$smarty.const._MD_CBBX_TYPE_PENDING}>"><{$smarty.const._MD_CBBX_TYPE_PENDING}></a> | 
<a href="<{$smarty.const.CBBX_URL}>/viewpost.php?uid=<{$uid}>&amp;type=deleted#admin" target="_self" title="<{$smarty.const._MD_CBBX_TYPE_DELETED}>"><{$smarty.const._MD_CBBX_TYPE_DELETED}></a> | 
<a href="<{$smarty.const.CBBX_URL}>/viewpost.php?uid=<{$uid}>" target="_self" title="<{$smarty.const._MD_CBBX_TYPE_VIEW}>"><{$smarty.const._MD_CBBX_TYPE_VIEW}></a>
<{else}>
<a href="<{$smarty.const.CBBX_URL}>/viewpost.php?uid=<{$uid}>&amp;mode=1#admin" target="_self" title="<{$smarty.const._MD_CBBX_TYPE_ADMIN}>"><{$smarty.const._MD_CBBX_TYPE_ADMIN}></a>
<{/if}>
</div>
<{/if}>
<div class="clear"></div>

<br />
<div>
<div style="float: left; text-align:left;">
	<a id="threadbottom"></a><{$up}>&nbsp;<a href="#threadtop"><{$smarty.const._MD_CBBX_TOP}></a>
</div>
<div style="float: right; text-align:right;">
<{$pagenav}>
</div>
</div>
<div class="clear"></div>

<br />
<br />
<div>
<div style="float: left; text-align: left;">
<form action="search.php" method="get">
<input name="term" id="term" type="text" size="15" />
<input type="hidden" name="sortby" id="sortby" value="p.post_time desc" />
<input type="hidden" name="action" id="action" value="yes" />
<input type="hidden" name="searchin" id="searchin" value="both" />
<input type="submit" class="formButton" value="<{$smarty.const._MD_CBBX_SEARCH}>" /><br />
[<a href="<{$smarty.const.CBBX_URL}>/search.php"><{$smarty.const._MD_CBBX_ADVSEARCH}></a>]
</form>
</div>
<div style="float: right; text-align: right;">
<{$forum_jumpbox}>
</div>
</div>
<div class="clear"></div>

<br />
<br />

<{if $online}><{include file="db:cbbx_online.tpl"}><{/if}>
<!-- end module contents -->