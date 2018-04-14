<?php
ob_start(); /* template body */ ;
'';// checking for modification in file:./templates/default/index.tpl
if (!("1507401556" == filemtime('./templates/default/index.tpl'))) { ob_end_clean(); return false; };?><?= "<?" ?>xml version="1.0" encoding="utf-8"?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
    <title>:: <?php echo htmlspecialchars((isset($this->scope["SITE_TITLE"]) ? $this->scope["SITE_TITLE"] : null));?> - bots<?php if ((isset($this->scope["botname"]) ? $this->scope["botname"] : null)) {
?> - <?php echo htmlspecialchars((isset($this->scope["botname"]) ? $this->scope["botname"] : null));

}
if ((isset($this->scope["search_query"]) ? $this->scope["search_query"] : null)) {
?> - <?php echo htmlspecialchars((isset($this->scope["search_query"]) ? $this->scope["search_query"] : null));

}?> ::</title>
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
    <input type="text" name="search" value="<?php echo htmlspecialchars((isset($this->scope["search_query"]) ? $this->scope["search_query"] : null));?>" class="query" />
<?php if ((isset($this->scope["botid"]) ? $this->scope["botid"] : null)) {
?>
    <input type="hidden" name="bot" value="<?php echo htmlspecialchars($this->readVar("botnames.".(isset($this->scope["botid"]) ? $this->scope["botid"] : null)));?>" />
    <input type="submit" name="searchthis" value="Search this bot" class="submit" />
    <input type="submit" name="searchall" value="Search all bots" class="submit" />
<?php 
}
else {
?>
    <input type="submit" value="Search" class="submit" />
<?php 
}?>

  </div>
</form>
<div class="bots">
<div class="botsheader">
<?php $this->scope["botlisttotal"]=count((isset($this->scope["botlist_array"]) ? $this->scope["botlist_array"] : null));
if (( (isset($this->scope["search_query_error_vague"]) ? $this->scope["search_query_error_vague"] : null) )) {
?>
  <div class="title"><strong>Error:</strong> Search query too vague!</div>
<?php 
}
elseif (! (isset($this->scope["botlist_array"]) ? $this->scope["botlist_array"] : null) || (isset($this->scope["botlisttotal"]) ? $this->scope["botlisttotal"] : null) <= 0) {
?>
  <div class="title">No packs found!</div>
<?php 
}
else {
?>
  <div class="title"><?php echo htmlspecialchars((isset($this->scope["botlisttotal"]) ? $this->scope["botlisttotal"] : null));?> pack<?php if ((isset($this->scope["botlisttotal"]) ? $this->scope["botlisttotal"] : null) != 1) {
?>s<?php 
}?> found<?php if ((isset($this->scope["botid"]) ? $this->scope["botid"] : null)) {
?> on <?php echo htmlspecialchars($this->readVar("botnames.".(isset($this->scope["botid"]) ? $this->scope["botid"] : null)));

}
if ((isset($this->scope["search_query"]) ? $this->scope["search_query"] : null)) {
?> matching "<?php echo htmlspecialchars((isset($this->scope["search_query"]) ? $this->scope["search_query"] : null));?>"<?php 
}?>:</div>
<?php 
}?>

</div>


<table class="botlist">
<tr class="nowrap">

<?php echo $this->assignInScope(array(0=>array(0=>"batch", 1=>"Batch"), 1=>array(0=>"name", 1=>"Name"), 2=>array(0=>"pack", 1=>"Pack"), 3=>array(0=>"size", 1=>"Size"), 4=>array(0=>"filename", 1=>"Filename")), 'header_array');?>


<?php 
$_fh0_data = (isset($this->scope["header_array"]) ? $this->scope["header_array"] : null);
if ($this->isArray($_fh0_data) === true)
{
	foreach ($_fh0_data as $this->scope['column'])
	{
/* -- foreach start output */
?>
  <th><?php echo $this->scope["column"]["1"];?></th>
<?php 
/* -- foreach end output */
	}
}?>

</tr>

<?php $this->scope["botlisttotal"]=count((isset($this->scope["botlist_array"]) ? $this->scope["botlist_array"] : null));
$this->scope["botlistcount"]=0;

$_fh1_data = (isset($this->scope["botlist_array"]) ? $this->scope["botlist_array"] : null);
if ($this->isArray($_fh1_data) === true)
{
	foreach ($_fh1_data as $this->scope['bot'])
	{
/* -- foreach start output */

$this->scope["botname"]=$this->readVar("botnames.".(isset($this->scope["bot"]["botId"]) ? $this->scope["bot"]["botId"]:null));
$this->scope["botlistcount"]=((isset($this->scope["botlistcount"]) ? $this->scope["botlistcount"] : null) + 1)?>

<tr class="botlistitem<?php if ((isset($this->scope["botlistcount"]) ? $this->scope["botlistcount"] : null) == 1) {
?> first<?php 
}
if ((isset($this->scope["botlistcount"]) ? $this->scope["botlistcount"] : null) == (isset($this->scope["botlisttotal"]) ? $this->scope["botlisttotal"] : null)) {
?> last<?php 
}?>" botname="<?php echo htmlspecialchars((isset($this->scope["botname"]) ? $this->scope["botname"] : null), (defined("ENT_QUOTES") ? ENT_QUOTES : null));?>" botpack="<?php echo htmlspecialchars((isset($this->scope["bot"]["number"]) ? $this->scope["bot"]["number"]:null), (defined("ENT_QUOTES") ? ENT_QUOTES : null));?>" >
  <td class="batch"><input type="checkbox" name="batch" /></td>
  <td class="name"><a href="?bot=<?php echo urlencode($this->readVar("botnames.".(isset($this->scope["bot"]["botId"]) ? $this->scope["bot"]["botId"]:null)));?>"><?php echo htmlspecialchars($this->readVar("botnames.".(isset($this->scope["bot"]["botId"]) ? $this->scope["bot"]["botId"]:null)));?></a></td>
  <td class="packnumber"><?php echo htmlspecialchars((isset($this->scope["bot"]["number"]) ? $this->scope["bot"]["number"]:null));?></td>
  <td class="filesize"><?php echo htmlspecialchars((isset($this->scope["bot"]["size"]) ? $this->scope["bot"]["size"]:null));?></td>
  <td class="filename"><?php echo htmlspecialchars((isset($this->scope["bot"]["name"]) ? $this->scope["bot"]["name"]:null));?> 
  <a href="?search=<?php echo urlencode((isset($this->scope["bot"]["name"]) ? $this->scope["bot"]["name"]:null));?>" class="link" title="Find out what other bots have this file">[s]</a></td>
</tr>
<?php 
/* -- foreach end output */
	}
}?>


</table>

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
$_fh2_data = (isset($this->scope["TEMPLATE_LIST"]) ? $this->scope["TEMPLATE_LIST"] : null);
if ($this->isArray($_fh2_data) === true)
{
	foreach ($_fh2_data as $this->scope['template'])
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