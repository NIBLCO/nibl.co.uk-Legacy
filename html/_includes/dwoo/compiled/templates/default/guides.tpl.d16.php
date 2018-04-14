<?php
ob_start(); /* template body */ ;
'';// checking for modification in file:./templates/default/index.tpl
if (!("1507396444" == filemtime('./templates/default/index.tpl'))) { ob_end_clean(); return false; };?><?= "<?" ?>xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
    <title>:: <?php echo htmlspecialchars((isset($this->scope["SITE_TITLE"]) ? $this->scope["SITE_TITLE"] : null));?> - Guides ::</title>
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
  <br/><br/>
  <div class="searchbox">
  <p>Operation and usage of Ooinuza.</p><br/>
  <div style="text-align: left; padding-left: 20px;">
  Our friend goes by the name Ooinuza.  He has been around for a while now;<br/>
  Conceptualized by Sirus. Version 1 by Jenga. Version 2 (current) by _Maru_ and Jenga.<br/>
  Quite a bit of debugging by Aashiqmunda as well.<br/>
  <br/>
  Search for a series using:<br/>
	!search Search Term Here<br/>
	Or<br/>
	!search Search Term Here [episode#-episode#]<br/>
	Or<br/>
	!search Search Term Here !DONTWANT [episode#-episode#]<br/>
	<br/>
	Searching [episode#-episode#] means to search episodes in order.<br/>
	Using !DONTWANT means you don't want to include those results.<br/>
	<br/>
	Example:<br/>
	!search naruto [10-12] !raw<br/>
	<br/>
	will return<br/>
	naruto episode 10.avi<br/>
	naruto episode 11.avi<br/>
	naruto episode 12.avi<br/>
	<br/>
	It will NOT return 'naruto episode 10 RAW.avi'<br/>
	<br/>
	To Stop a listing:<br/>
	/msg ooinuza stop<br/>
	<br/>
	There is a maximum of 15 results returned.<br/>
	</div>
  </div>
  <br/>
      </div>
    </div>
    <div id="footer">
      <div class="right">
<?php if (count((isset($this->scope["TEMPLATE_LIST"]) ? $this->scope["TEMPLATE_LIST"] : null)) > 0) {
?>
        Theme:
        <select class="themes" onchange="$.cookie('theme', this.value, { expires: 3652 });location.reload()">
<?php 
$_fh0_data = (isset($this->scope["TEMPLATE_LIST"]) ? $this->scope["TEMPLATE_LIST"] : null);
if ($this->isArray($_fh0_data) === true)
{
	foreach ($_fh0_data as $this->scope['template'])
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