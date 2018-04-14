<?php
if (function_exists('Dwoo_Plugin_date_format')===false)
	$this->getLoader()->loadPlugin('date_format');
ob_start(); /* template body */ ;
'';// checking for modification in file:./templates/default/index.tpl
if (!("1507401556" == filemtime('./templates/default/index.tpl'))) { ob_end_clean(); return false; };?><?= "<?" ?>xml version="1.0" encoding="utf-8"?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
    <title>:: <?php echo htmlspecialchars((isset($this->scope["SITE_TITLE"]) ? $this->scope["SITE_TITLE"] : null));?> - news ::</title>
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
<div style="float: right; padding: 0 0.25em; margin-left: 1em;">
<div style="float: right; padding-left: 0.25em; font-size: 0.5em; color: #cbab6c;"><a href="javascript:/* hide graphic */" onclick="this.parentNode.parentNode.style.display='none'"></a></div>
      <!--[if IE]><object style="float: right;" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" width="325" height="150"></[!endif]-->
      <!--[if !IE]>--><object type="application/x-shockwave-flash" data="<?php echo htmlspecialchars((isset($this->scope["TEMPLATE_PATH"]) ? $this->scope["TEMPLATE_PATH"] : null));?>/pengu.swf" width="325" height="150"><!--<![endif]-->
        <param name="allowScriptAccess" value="sameDomain" />
        <param name="movie" value="<?php echo htmlspecialchars((isset($this->scope["TEMPLATE_PATH"]) ? $this->scope["TEMPLATE_PATH"] : null));?>/pengu.swf" />
        <param name="quality" value="high" />
        <param name="bgcolor" value="<?php if ((isset($this->scope["TEMPLATE_PENGUCOLOR"]) ? $this->scope["TEMPLATE_PENGUCOLOR"] : null)) {

echo htmlspecialchars((isset($this->scope["TEMPLATE_PENGUCOLOR"]) ? $this->scope["TEMPLATE_PENGUCOLOR"] : null));

}?>" />
        <!--[if IE]><embed src="<?php echo htmlspecialchars((isset($this->scope["TEMPLATE_PATH"]) ? $this->scope["TEMPLATE_PATH"] : null));?>/pengu.swf" quality="high" width="325" height="150" name="movie" align="" type="application/x-shockwave-flash" pluginspace="http://www.macromedia.com/go/getflashplayer" /><![endif]-->
        <img src="<?php echo htmlspecialchars((isset($this->scope["TEMPLATE_PATH"]) ? $this->scope["TEMPLATE_PATH"] : null));?>/banner.jpg" width="325" height="116" alt="[penguin] *poke poke* *poke poke*" />
      </object>
</div>
<div style="font-size: 2em; font-style: italic; padding: 1.5em 1em;"><?php echo htmlspecialchars((isset($this->scope["channel_topic"]["website_trim"]) ? $this->scope["channel_topic"]["website_trim"]:null));?><div style="font-size: 0.65em; text-align: right; margin-top: 0.1em;"> <?php echo htmlspecialchars((isset($this->scope["channel_topic"]["setBy"]) ? $this->scope["channel_topic"]["setBy"]:null));?></div></div>
<div style="clear: both; padding-left: 50px;">Welcome to #nibl@irc.rizon.net.<br/>Join us by clicking the <a href="/IRC.php">IRC</a> tab up top or by using an <a href="/links.php">IRC client</a>.<br/><br/></div>
<div class="news" style="clear: both;">
<?php 
$_fh0_data = (isset($this->scope["news_array"]) ? $this->scope["news_array"] : null);
if ($this->isArray($_fh0_data) === true)
{
	foreach ($_fh0_data as $this->scope['newsitem'])
	{
/* -- foreach start output */
?>
<div class="newsitem" id="news<?php echo htmlspecialchars((isset($this->scope["newsitem"]["id"]) ? $this->scope["newsitem"]["id"]:null));?>">
  <div class="newsheader">
    <div class="timestamp" title="<?php echo Dwoo_Plugin_date_format($this, (isset($this->scope["newsitem"]["timestamp"]) ? $this->scope["newsitem"]["timestamp"]:null), "%a %d %B %Y @ %T %z", null);?>"><?php echo Dwoo_Plugin_date_format($this, (isset($this->scope["newsitem"]["timestamp"]) ? $this->scope["newsitem"]["timestamp"]:null), "%d %B %Y", null);?></div>
    <h2 class="title"><?php echo htmlspecialchars((isset($this->scope["newsitem"]["subject"]) ? $this->scope["newsitem"]["subject"]:null));?><a href="#news<?php echo htmlspecialchars((isset($this->scope["newsitem"]["id"]) ? $this->scope["newsitem"]["id"]:null));?>" class="newsanchor">#</a></h2>
  </div>
  <div class="newssubheader" style="height: 15px;"><span class="right">Posted by <?php echo $this->scope["newsitem"]["name"];?></span></div>
  <div class="text"><br/><?php echo $this->scope["newsitem"]["body"];?><br/><br/></div>
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