{extends "index.tpl"}

{block "site_title"}{$dwoo.parent} - news{/block}

{block "content_mod"}_edge{/block}

{block "content"}
<div style="float: right; padding: 0 0.25em; margin-left: 1em;">
<div style="float: right; padding-left: 0.25em; font-size: 0.5em; color: #cbab6c;"><a href="javascript:/* hide graphic */" onclick="this.parentNode.parentNode.style.display='none'"></a></div>
      <!--[if IE]><object style="float: right;" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" width="325" height="150"></[!endif]-->
      <!--[if !IE]>--><object type="application/x-shockwave-flash" data="{$TEMPLATE_PATH|htmlspecialchars}/pengu.swf" width="325" height="150"><!--<![endif]-->
        <param name="allowScriptAccess" value="sameDomain" />
        <param name="movie" value="{$TEMPLATE_PATH|htmlspecialchars}/pengu.swf" />
        <param name="quality" value="high" />
        <param name="bgcolor" value="{if $TEMPLATE_PENGUCOLOR}{$TEMPLATE_PENGUCOLOR|htmlspecialchars}{/if}" />
        <!--[if IE]><embed src="{$TEMPLATE_PATH|htmlspecialchars}/pengu.swf" quality="high" width="325" height="150" name="movie" align="" type="application/x-shockwave-flash" pluginspace="http://www.macromedia.com/go/getflashplayer" /><![endif]-->
        <img src="{$TEMPLATE_PATH|htmlspecialchars}/banner.jpg" width="325" height="116" alt="[penguin] *poke poke* *poke poke*" />
      </object>
</div>
<div style="font-size: 2em; font-style: italic; padding: 1.5em 1em;">{$channel_topic.website_trim|htmlspecialchars}<div style="font-size: 0.65em; text-align: right; margin-top: 0.1em;"> {$channel_topic.setBy|htmlspecialchars}</div></div>
<div style="clear: both; padding-left: 50px;">Welcome to #nibl@irc.rizon.net.<br/>Join us by clicking the <a href="/IRC.php">IRC</a> tab up top or by using an <a href="/links.php">IRC client</a>.<br/><br/></div>
<div class="news" style="clear: both;">
{foreach $news_array newsitem}
<div class="newsitem" id="news{$newsitem.id|htmlspecialchars}">
  <div class="newsheader">
    <div class="timestamp" title="{date_format $newsitem.timestamp "%a %d %B %Y @ %T %z"}{* "%c %z" *}">{date_format $newsitem.timestamp "%d %B %Y"}{* "%D" *}</div>
    <h2 class="title">{$newsitem.subject|htmlspecialchars}<a href="#news{$newsitem.id|htmlspecialchars}" class="newsanchor">#</a></h2>
  </div>
  <div class="newssubheader" style="height: 15px;"><span class="right">Posted by {$newsitem.name}</span></div>
  <div class="text"><br/>{$newsitem.body}<br/><br/></div>
</div>
{/foreach}
</div>


{/block}

