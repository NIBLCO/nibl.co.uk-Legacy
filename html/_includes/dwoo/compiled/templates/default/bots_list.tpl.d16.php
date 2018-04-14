<?php
ob_start(); /* template body */ ;
'';// checking for modification in file:./templates/default/index.tpl
if (!("1507401556" == filemtime('./templates/default/index.tpl'))) { ob_end_clean(); return false; };?><?= "<?" ?>xml version="1.0" encoding="utf-8"?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
    <title>:: <?php echo htmlspecialchars((isset($this->scope["SITE_TITLE"]) ? $this->scope["SITE_TITLE"] : null));?> - bots ::</title>
    <link rel="stylesheet" href="<?php echo htmlspecialchars((isset($this->scope["TEMPLATE_PATH"]) ? $this->scope["TEMPLATE_PATH"] : null));?>/reset.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo htmlspecialchars((isset($this->scope["TEMPLATE_PATH"]) ? $this->scope["TEMPLATE_PATH"] : null));?>/jquery-ui.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo htmlspecialchars((isset($this->scope["TEMPLATE_PATH"]) ? $this->scope["TEMPLATE_PATH"] : null));?>/jquery-ui.structure.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo htmlspecialchars((isset($this->scope["TEMPLATE_PATH"]) ? $this->scope["TEMPLATE_PATH"] : null));?>/jquery-ui.theme.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo htmlspecialchars((isset($this->scope["TEMPLATE_PATH"]) ? $this->scope["TEMPLATE_PATH"] : null));?>/style<?php if ((isset($this->scope["TEMPLATE_SUBTHEME"]) ? $this->scope["TEMPLATE_SUBTHEME"] : null)) {
?>-<?php echo htmlspecialchars((isset($this->scope["TEMPLATE_SUBTHEME"]) ? $this->scope["TEMPLATE_SUBTHEME"] : null));

}?>.css" type="text/css" />
    <script type="text/javascript" src="<?php echo htmlspecialchars((isset($this->scope["SITE_PATH"]) ? $this->scope["SITE_PATH"] : null));?>scripts/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo htmlspecialchars((isset($this->scope["SITE_PATH"]) ? $this->scope["SITE_PATH"] : null));?>scripts/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php echo htmlspecialchars((isset($this->scope["SITE_PATH"]) ? $this->scope["SITE_PATH"] : null));?>scripts/jquery.cookie.js"></script>
    <script type="text/javascript" src="<?php echo htmlspecialchars((isset($this->scope["SITE_PATH"]) ? $this->scope["SITE_PATH"] : null));?>scripts/botlist.js"></script>
  </head>
  <body>
    <div id="wrapper">
      <div id="header">
        <h1><?php echo htmlspecialchars((isset($this->scope["SITE_TITLE"]) ? $this->scope["SITE_TITLE"] : null));?></h1>
        <h3><a href="irc://irc.rizon.net/nibl">#nibl @ irc.rizon.net</a></h3>
        <ul id="navigation">
          <li><a href="<?php echo $this->scope["SITE_PATH"];?>"<?php if ((isset($this->scope["PAGE"]) ? $this->scope["PAGE"] : null) == "news") {
?> class="selected"<?php 
}?>>News</a></li>
          <li><a href="<?php echo $this->scope["SITE_PATH"];?>bots.php"<?php if ((isset($this->scope["PAGE"]) ? $this->scope["PAGE"] : null) == "bots") {
?> class="selected"<?php 
}?>>Bots</a></li>
          <li><a href="<?php echo $this->scope["SITE_PATH"];?>IRC.php"<?php if ((isset($this->scope["PAGE"]) ? $this->scope["PAGE"] : null) == "IRC") {
?> class="selected"<?php 
}?>>IRC</a></li>
          <li><a href="<?php echo $this->scope["SITE_PATH"];?>guides.php"<?php if ((isset($this->scope["PAGE"]) ? $this->scope["PAGE"] : null) == "guides") {
?> class="selected"<?php 
}?>>Guides</a></li>
          <li><a href="<?php echo $this->scope["SITE_PATH"];?>links.php"<?php if ((isset($this->scope["PAGE"]) ? $this->scope["PAGE"] : null) == "links") {
?> class="selected"<?php 
}?>>Links</a></li>
          <li><a href="<?php echo $this->scope["SITE_PATH"];?>staff.php"<?php if ((isset($this->scope["PAGE"]) ? $this->scope["PAGE"] : null) == "staff") {
?> class="selected"<?php 
}?>>Staff</a></li>
        </ul>
      </div>
      <div id="content_edge">
<form method="get" action="">
  <div class="searchbox"><br/>Search:
    <input type="text" name="search" class="query" />
    <input type="submit" value="Search" class="submit" />
  </div>
</form>
<div class="bots">
<div class="botsheader">
<?php $this->scope["botstotal"]=count((isset($this->scope["bots_array"]) ? $this->scope["bots_array"] : null));
if ((isset($this->scope["botstotal"]) ? $this->scope["botstotal"] : null) > 0) {
?>
  <div class="title">All bots:</div>
  <?php echo htmlspecialchars((isset($this->scope["botstotal"]) ? $this->scope["botstotal"] : null));?> bot<?php if ((isset($this->scope["botstotal"]) ? $this->scope["botstotal"] : null) != 1) {
?>s<?php 
}?> indexed
<?php 
}
else {
?>
  <div class="title">No bots found!</div>
<?php 
}?>

</div>
<div class="bot">
  <div class="hidden" id="botinfo" botid="-1" botname="latest"></div>
  <div class="expand"><a href="javascript:/* expand/collapse botlisting */" id="toggle">+</a></div>
  <div class="name"><a href="?latest=true">Latest Packs</a></div>
  <div class="list"></div>
</div>
<?php $this->scope["botcount"]=0;

$_fh0_data = (isset($this->scope["bots_array"]) ? $this->scope["bots_array"] : null);
if ($this->isArray($_fh0_data) === true)
{
	foreach ($_fh0_data as $this->scope['bot'])
	{
/* -- foreach start output */

$this->scope["botcount"]=((isset($this->scope["botcount"]) ? $this->scope["botcount"] : null) + 1)?>

<div class="bot<?php if ((isset($this->scope["botcount"]) ? $this->scope["botcount"] : null) == 1) {
?> first<?php 
}
if ((isset($this->scope["botcount"]) ? $this->scope["botcount"] : null) == (isset($this->scope["botstotal"]) ? $this->scope["botstotal"] : null)) {
?> last<?php 
}?>">
  <div class="hidden" id="botinfo" botid="<?php echo intval((isset($this->scope["bot"]["id"]) ? $this->scope["bot"]["id"]:null));?>" botname="<?php echo $this->scope["bot"]["name"];?>"></div>
  <div class="expand"><a href="javascript:/* expand/collapse botlisting */" id="toggle">+</a></div>
  <div class="name">
    <a href="?bot=<?php echo urlencode((isset($this->scope["bot"]["name"]) ? $this->scope["bot"]["name"]:null));?>">
        <?php echo htmlspecialchars((isset($this->scope["bot"]["name"]) ? $this->scope["bot"]["name"]:null));?>

        <div class="right">(<?php echo intval((isset($this->scope["bot"]["packSize"]) ? $this->scope["bot"]["packSize"]:null));?> packs)</div>
    </a>
  </div>
  <div class="list"></div>
</div>
<?php 
/* -- foreach end output */
	}
}?>

</div>
      </div>
    </div>
    <div id="footer">
      <div class="right">
<?php if (count((isset($this->scope["TEMPLATE_LIST"]) ? $this->scope["TEMPLATE_LIST"] : null)) > 0) {
?>
        Theme:
        <select class="themes" onchange="$.cookie('theme', this.value, { expires: 3652 });location.reload()">
<?php 
$_fh1_data = (isset($this->scope["TEMPLATE_LIST"]) ? $this->scope["TEMPLATE_LIST"] : null);
if ($this->isArray($_fh1_data) === true)
{
	foreach ($_fh1_data as $this->scope['template'])
	{
/* -- foreach start output */
?>
          <option value="<?php echo htmlspecialchars((isset($this->scope["template"]["name"]) ? $this->scope["template"]["name"]:null));?>"<?php if ((isset($this->scope["TEMPLATE_NAME"]) ? $this->scope["TEMPLATE_NAME"] : null) == (isset($this->scope["template"]["name"]) ? $this->scope["template"]["name"]:null)) {
?> selected="selected"<?php 
}?>><?php echo htmlspecialchars((isset($this->scope["template"]["fullname"]) ? $this->scope["template"]["fullname"]:null));?></option>
<?php 
/* -- foreach end output */
	}
}?>

        </select>
<?php 
}?>

      </div>
      <?php echo get_exectime();
if (zlib_get_coding_type() == "gzip") {
?> (gzip)<?php 
}?><!--[if IE]> | If you're using IE, good luck viewing this page properly!<![endif]-->
    </div>
    <div id="popup" title="Paste this into your IRC client:" style="display:none;"><textarea id="popuptext" rows="4" cols="25" /></div>
  </body>
</html>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>