{* This template is used to output the main bots.php page *}

{extends "index.tpl"}

{block "site_title"}{$dwoo.parent} - bots{/block}

{block "content_mod"}_edge{/block}

{block "content"}
<form method="get" action="">
  <div class="searchbox"><br/>Search:
    <input type="text" name="search" class="query" />
    <input type="submit" value="Search" class="submit" />
  </div>
</form>
<div class="bots">
<div class="botsheader">
{$botstotal = count($bots_array);
if $botstotal > 0}
  <div class="title">All bots:</div>
  {$botstotal|htmlspecialchars} bot{if $botstotal != 1}s{/if} indexed
{else}
  <div class="title">No bots found!</div>
{/if}
</div>
<div class="bot">
  <div class="hidden" id="botinfo" botid="-1" botname="latest"></div>
  <div class="expand"><a href="javascript:/* expand/collapse botlisting */" id="toggle">+</a></div>
  <div class="name"><a href="?latest=true">Latest Packs</a></div>
  <div class="list"></div>
</div>
{$botcount = 0;
foreach $bots_array bot;
$botcount = $botcount+1}
<div class="bot{if $botcount == 1} first{/if}{if $botcount == $botstotal} last{/if}">
  <div class="hidden" id="botinfo" botid="{$bot.id|intval}" botname="{$bot.name}"></div>
  <div class="expand"><a href="javascript:/* expand/collapse botlisting */" id="toggle">+</a></div>
  <div class="name">
    <a href="?bot={$bot.name|urlencode}">
        {$bot.name|htmlspecialchars}
        <div class="right">({$bot.packSize|intval} packs)</div>
    </a>
  </div>
  <div class="list"></div>
</div>
{/foreach}
</div>
{/block}
