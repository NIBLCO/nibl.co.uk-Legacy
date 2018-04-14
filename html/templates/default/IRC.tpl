{extends "index.tpl"}

{block "site_title"}{$dwoo.parent} - IRC{/block}

{block "content_mod"}_edge{/block}

{block "content"}
  <div class="searchbox">
    <br />
    <p>Copy and paste DCC Get commands from the bots page here, or just stay and chat!</p>
    <br />
    <br />
    {$applet}
  </div>
  <br/>
{/block}

