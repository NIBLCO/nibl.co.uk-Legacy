{extends "index.tpl"}

{block "site_title"}{$dwoo.parent} - news{/block}

{block "content_mod"}_edge{/block}

{block "content"}

<div class="news" style="clear: both;">

<form name="form1" action="admin.php" method="POST">
<select name="select1" size="1" style="background-color:#FFFFD7">
{foreach $channel_array newsitem}
<option value="{$newsitem.name|htmlspecialchars}">{$newsitem.name|htmlspecialchars}</option>
{/foreach}
</select>
<input type="button" value="Go" />
</form>
<br />
</div>

{/block}


<html>
<head>
<title>My Page</title>
</head>
<body>
<form name="myform" action="http://www.mydomain.com/myformhandler.cgi" method="POST">
<div align="center">
<br><br>
<input type="text" size="25" value="Enter your name here!">
<br><input type="submit" value="Send me your name!"><br>
</div>
</form>
</body>
</html>