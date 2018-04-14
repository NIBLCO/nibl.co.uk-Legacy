{* This template is used when using a search term *}

{extends "index.tpl"}

{block "site_title"}{$dwoo.parent} - bots{if $botname} - {$botname|htmlspecialchars}{/if}{if $search_query} - {$search_query|htmlspecialchars}{/if}{/block}

{block "content_mod"}_edge{/block}

{block "content"}
<form method="get" action="">
  <div class="searchbox"><br/>Search:
    <input type="text" name="search" value="{$search_query|htmlspecialchars}" class="query" />
{if $botid}
    <input type="hidden" name="bot" value="{$botnames[$botid]|htmlspecialchars}" />
    <input type="submit" name="searchthis" value="Search this bot" class="submit" />
    <input type="submit" name="searchall" value="Search all bots" class="submit" />
{else}
    <input type="submit" value="Search" class="submit" />
{/if}
  </div>
</form>
<div class="bots">
<div class="botsheader">
{$botlisttotal = count($botlist_array);
if ($search_query_error_vague)}
  <div class="title"><strong>Error:</strong> Search query too vague!</div>
{elseif !$botlist_array or $botlisttotal <= 0}
  <div class="title">No packs found!</div>
{else}
  <div class="title">{$botlisttotal|htmlspecialchars} pack{if $botlisttotal != 1}s{/if} found{if $botid} on {$botnames[$botid]|htmlspecialchars}{/if}{if $search_query} matching "{$search_query|htmlspecialchars}"{/if}:</div>
{/if}
</div>


<table class="botlist">
<tr class="nowrap">

{assign array(
    array("batch", "Batch"),
    array("name", "Name"),
    array("pack", "Pack"),
    array("size", "Size"),
    array("filename", "Filename")) header_array}

{foreach $header_array column}
  <th>{$column[1]}</th>
{/foreach}
</tr>

{$botlisttotal = count($botlist_array);

$botlistcount = 0;

foreach $botlist_array bot;
$botname = $botnames[$bot.botId]
$botlistcount = $botlistcount+1}
<tr class="botlistitem{if $botlistcount == 1} first{/if}{if $botlistcount == $botlisttotal} last{/if}" botname="{htmlspecialchars($botname, %ENT_QUOTES)}" botpack="{htmlspecialchars($bot.number, %ENT_QUOTES)}" >
  <td class="batch"><input type="checkbox" name="batch" /></td>
  <td class="name"><a href="?bot={$botnames[$bot.botId]|urlencode}">{$botnames[$bot.botId]|htmlspecialchars}</a></td>
  <td class="packnumber">{$bot.number|htmlspecialchars}</td>
  <td class="filesize">{$bot.size|htmlspecialchars}</td>
  <td class="filename">{$bot.name|htmlspecialchars} 
  <a href="?search={$bot.name|urlencode}" class="link" title="Find out what other bots have this file">[s]</a></td>
</tr>
{/foreach}

</table>

</div>
{/block}
