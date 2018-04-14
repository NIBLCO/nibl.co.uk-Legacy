{*
This template is used in the rpc.php API calls and included when searching 
It is the only output for the botlists
*}

<table class="botlist">
<tr class="nowrap">

{if $botid == -1}
{assign array(
    array("batch", "Batch"),
    array("name", "Name"),
    array("pack", "Pack"),
    array("size", "Size"),
    array("filename", "Filename")) header_array}
{else}
{assign array(
    array("batch", "Batch"),
    array("pack", "Pack"),
    array("size", "Size"),
    array("filename", "Filename")) header_array}
{/if}

{foreach $header_array column}
  <th>{$column[1]}</th>
{/foreach}
</tr>

{$botlisttotal = count($botlist_array);}
{$botlistcount = 0;}

{foreach $botlist_array bot;}
  {$botlistcount = $botlistcount+1;}
  {if $botid == -1}
    {$botname = $botnames[$bot.botId];}
  {/if}

<tr class="botlistitem{if $botlistcount == 1} first{/if}{if $botlistcount == $botlisttotal} last{/if}" botname="{htmlspecialchars($botname, %ENT_QUOTES)}" botpack="{htmlspecialchars($bot.number, %ENT_QUOTES)}" >
  <td class="batch"><input type="checkbox" name="batch" /></td>
  {if $botid == -1}
  <td class="name"><a href="?bot={$botname|urlencode}">{$botname|htmlspecialchars}</a></td>
  {/if}
  <td class="packnumber">{$bot.number|htmlspecialchars}</td>
  <td class="filesize">{$bot.size|htmlspecialchars}</td>
  <td class="filename">{$bot.name|htmlspecialchars} 
  <a href="?search={$bot.name|urlencode}" class="link" title="Find out what other bots have this file">[s]</a></td>
</tr>
{/foreach}

</table>