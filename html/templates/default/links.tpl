{extends "index.tpl"}

{block "site_title"}{$dwoo.parent} - Links{/block}

{block "content_mod"}_edge{/block}

{block "content"}
  <div class="searchbox">
    <br />
    <p>You will find links below to some of #nibl's favorite sites.</p>
    <br />
    <p>Looking for an IRC client? Check out <a href="http://www.mirc.com/" target="_blank">mIRC</a>.</p><br/>
    <p>Interested in encoding video? <a href="http://www.doom9.org/" target="_blank">Doom9</a> could hlep you.</p><br/>
    <p>Having problems playing video? <a href="http://www.videolan.org/" target="_blank">VLC</a> or <a href="http://cccp-project.net/">CCCP</a> can play most anything.</p><br/>
  </div>
  <br/>
{/block}

