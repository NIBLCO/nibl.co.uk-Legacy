<?php

$config["site_path"] = "";

require_once($config["site_path"] . "_includes/config.inc.php");
require_once($config["site_path"] . "_includes/common.inc.php");


setup_template();

$bot = $_GET['bot'];
$pack = $_GET['pack'];

$applet = '<applet code="IRCApplet.class" archive="pjirc/irc.jar,pjirc/pixx.jar" width="790" height="400">
        <param name="CABINETS" value="pjirc/irc.cab,pjirc/securedirc.cab,pjirc/pixx.cab" />
        <param name="nick" value="Nibl|'.rand(5,900).'" />
        <param name="fullname" value="PJIRC User" />
        <param name="host" value="irc.rizon.net" />
        <param name="gui" value="pixx" /> 
        <param name="command1" value="/join #nibl" />'
        .((isset($bot) && isset($pack))?'<param name="command2" value="/msg '.$bot.' XDCC SEND '.$pack.'" />':'').
    '</applet>';

$page = "IRC";

show_template(
	"IRC", 
	array(
	       'applet' => $applet
		)
	);

?>
