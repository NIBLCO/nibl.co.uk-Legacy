<?= "<?" ?>xml version="1.0" encoding="utf-8"{literal}?{/literal}>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
    <title>:: {block "site_title"}{$SITE_TITLE|htmlspecialchars}{/block} ::</title>
    <link rel="stylesheet" href="{$TEMPLATE_PATH|htmlspecialchars}/reset.css" type="text/css" />
    <link rel="stylesheet" href="{$TEMPLATE_PATH|htmlspecialchars}/jquery-ui.css" type="text/css" />
    <link rel="stylesheet" href="{$TEMPLATE_PATH|htmlspecialchars}/jquery-ui.structure.css" type="text/css" />
    <link rel="stylesheet" href="{$TEMPLATE_PATH|htmlspecialchars}/jquery-ui.theme.css" type="text/css" />
    <link rel="stylesheet" href="{$TEMPLATE_PATH|htmlspecialchars}/style{if $TEMPLATE_SUBTHEME}-{$TEMPLATE_SUBTHEME|htmlspecialchars}{/if}.css" type="text/css" />
    <script type="text/javascript" src="{$SITE_PATH|htmlspecialchars}scripts/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="{$SITE_PATH|htmlspecialchars}scripts/jquery-ui.js"></script>
    <script type="text/javascript" src="{$SITE_PATH|htmlspecialchars}scripts/jquery.cookie.js"></script>
    <script type="text/javascript" src="{$SITE_PATH|htmlspecialchars}scripts/botlist.js"></script>
  </head>
  <body>
    <div id="wrapper">
      <div id="header">
        <h1>{$SITE_TITLE|htmlspecialchars}</h1>
        <h3><a href="irc://irc.rizon.net/nibl">#nibl @ irc.rizon.net</a></h3>
        <ul id="navigation">
          <li><a href="{$SITE_PATH}"{if $PAGE == "news"} class="selected"{/if}>News</a></li>
          <li><a href="{$SITE_PATH}bots.php"{if $PAGE == "bots"} class="selected"{/if}>Bots</a></li>
          <li><a href="{$SITE_PATH}IRC.php"{if $PAGE == "IRC"} class="selected"{/if}>IRC</a></li>
          <li><a href="{$SITE_PATH}guides.php"{if $PAGE == "guides"} class="selected"{/if}>Guides</a></li>
          <li><a href="{$SITE_PATH}links.php"{if $PAGE == "links"} class="selected"{/if}>Links</a></li>
          <li><a href="{$SITE_PATH}staff.php"{if $PAGE == "staff"} class="selected"{/if}>Staff</a></li>
        </ul>
      </div>
      <div id="content{block "content_mod"}{/block}">
{block "content"}{/block}
      </div>
    </div>
    <div id="footer">
      <div class="right">
{if count($TEMPLATE_LIST) > 0}
        Theme:
        <select class="themes" onchange="$.cookie('theme', this.value, { expires: 3652 });location.reload()">
{foreach $TEMPLATE_LIST template}
          <option value="{$template.name|htmlspecialchars}"{if $TEMPLATE_NAME == $template.name} selected="selected"{/if}>{$template.fullname|htmlspecialchars}</option>
{/foreach}
        </select>
{/if}
      </div>
      {get_exectime}{if zlib_get_coding_type() == "gzip"} (gzip){/if}<!--[if IE]> | If you're using IE, good luck viewing this page properly!<![endif]-->
    </div>
    <div id="popup" title="Paste this into your IRC client:" style="display:none;"><textarea id="popuptext" rows="4" cols="25" /></div>
  </body>
</html>
