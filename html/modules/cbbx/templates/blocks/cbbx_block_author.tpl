<table class="outer" cellspacing="1">
  <{if $block.disp_mode == 0}>
    <tr>
      <th class="head" nowrap="nowrap"><{$smarty.const._MB_CBBX_AUTHOR}></th>
      <th class="head" align="center" nowrap="nowrap"><{$smarty.const._MB_CBBX_COUNT}></th>
    </tr>
    <{foreach item=author key=uid from=$block.authors}>
      <tr class="<{cycle values="even,odd"}>">
        <td><a href="<{$xoops_url}>/userinfo.php?uid=<{$uid}>"><{$author.name}></a></td>
        <td align="center"><{$author.count}></td>
      </tr>
    <{/foreach}>
  <{elseif $block.disp_mode == 1}>
    <{foreach item=author key=uid from=$block.authors}>
      <tr class="<{cycle values="even,odd"}>">
        <td><a href="<{$xoops_url}>/userinfo.php?uid=<{$uid}>"><{$author.name}></a> <{$author.count}></td>
      </tr>
    <{/foreach}>
  <{/if}>
</table>
<{if $block.indexNav}>
  <div style="text-align:right; padding: 5px;">
    <a href="<{$smarty.const.CBBX_URL}>/"><{$smarty.const._MB_CBBX_VSTFRMS}></a>
  </div>
<{/if}>