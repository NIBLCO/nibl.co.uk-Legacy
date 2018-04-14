<?php
ob_start(); /* template body */ ?>

<table class="botlist">
<tr class="nowrap">

<?php if ((isset($this->scope["botid"]) ? $this->scope["botid"] : null) == - 1) {
?>
<?php echo $this->assignInScope(array(0=>array(0=>"batch", 1=>"Batch"), 1=>array(0=>"name", 1=>"Name"), 2=>array(0=>"pack", 1=>"Pack"), 3=>array(0=>"size", 1=>"Size"), 4=>array(0=>"filename", 1=>"Filename")), 'header_array');?>

<?php 
}
else {
?>
<?php echo $this->assignInScope(array(0=>array(0=>"batch", 1=>"Batch"), 1=>array(0=>"pack", 1=>"Pack"), 2=>array(0=>"size", 1=>"Size"), 3=>array(0=>"filename", 1=>"Filename")), 'header_array');?>

<?php 
}?>


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

<?php $this->scope["botlisttotal"]=count((isset($this->scope["botlist_array"]) ? $this->scope["botlist_array"] : null))?>

<?php $this->scope["botlistcount"]=0?>


<?php 
$_fh1_data = (isset($this->scope["botlist_array"]) ? $this->scope["botlist_array"] : null);
if ($this->isArray($_fh1_data) === true)
{
	foreach ($_fh1_data as $this->scope['bot'])
	{
/* -- foreach start output */
?>
  <?php $this->scope["botlistcount"]=((isset($this->scope["botlistcount"]) ? $this->scope["botlistcount"] : null) + 1)?>

  <?php if ((isset($this->scope["botid"]) ? $this->scope["botid"] : null) == - 1) {
?>
    <?php $this->scope["botname"]=$this->readVar("botnames.".(isset($this->scope["bot"]["botId"]) ? $this->scope["bot"]["botId"]:null))?>

  <?php 
}?>


<tr class="botlistitem<?php if ((isset($this->scope["botlistcount"]) ? $this->scope["botlistcount"] : null) == 1) {
?> first<?php 
}
if ((isset($this->scope["botlistcount"]) ? $this->scope["botlistcount"] : null) == (isset($this->scope["botlisttotal"]) ? $this->scope["botlisttotal"] : null)) {
?> last<?php 
}?>" botname="<?php echo htmlspecialchars((isset($this->scope["botname"]) ? $this->scope["botname"] : null), (defined("ENT_QUOTES") ? ENT_QUOTES : null));?>" botpack="<?php echo htmlspecialchars((isset($this->scope["bot"]["number"]) ? $this->scope["bot"]["number"]:null), (defined("ENT_QUOTES") ? ENT_QUOTES : null));?>" >
  <td class="batch"><input type="checkbox" name="batch" /></td>
  <?php if ((isset($this->scope["botid"]) ? $this->scope["botid"] : null) == - 1) {
?>
  <td class="name"><a href="?bot=<?php echo urlencode((isset($this->scope["botname"]) ? $this->scope["botname"] : null));?>"><?php echo htmlspecialchars((isset($this->scope["botname"]) ? $this->scope["botname"] : null));?></a></td>
  <?php 
}?>

  <td class="packnumber"><?php echo htmlspecialchars((isset($this->scope["bot"]["number"]) ? $this->scope["bot"]["number"]:null));?></td>
  <td class="filesize"><?php echo htmlspecialchars((isset($this->scope["bot"]["size"]) ? $this->scope["bot"]["size"]:null));?></td>
  <td class="filename"><?php echo htmlspecialchars((isset($this->scope["bot"]["name"]) ? $this->scope["bot"]["name"]:null));?> 
  <a href="?search=<?php echo urlencode((isset($this->scope["bot"]["name"]) ? $this->scope["bot"]["name"]:null));?>" class="link" title="Find out what other bots have this file">[s]</a></td>
</tr>
<?php 
/* -- foreach end output */
	}
}?>


</table><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>