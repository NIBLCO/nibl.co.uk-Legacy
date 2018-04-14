<?php

$config["site_path"] = "";
require_once($config["site_path"] . "_includes/config.inc.php");
require_once($config["site_path"] . "_includes/common.inc.php");

setup_template();

$page = "news";

// TODO call an api for topic
$channel_topic = array("channel" => "#NIBL", "setBy" => "Jenga", "website_trim" => " ლ(ಠ_ಠლ) Edition ");

$news_array = array();
$news_item = array(
	'id' => '2281',
	'timestamp' => '1507402251',
	'subject' => 'Nibl site changes',
	'name' => 'Jenga',
	'body' => 'Fixed some site functionality and upgraded libraries.<br/>Site uses HTTPS only.<br/>Site should handle NIBL|Arutha without crashing.<br /><br />If there are any problems, please contact jenga in #nibl.'
);
array_push($news_array, $news_item);
$news_item = array(
'id' => '2280',
'timestamp' => '1457395313',
'subject' => 'BTC means Bitcoin!',
'name' => 'Jenga',
'body' => 'NIBL needs a facelift!<br/><br/>We are looking to design and develop a new website and need your help to do so.<br/>This time, professionally!<br/><br/>Help us out and send your spare BTC to<br/>15ojJ2uWnCeEzBLzL4PSHPSbxDw7iMDhD1'
);
array_push($news_array, $news_item);
$news_item = array(
'id' => '2278',
'timestamp' => '1398189075',
'subject' => 'nibl.co.uk v3',
'name' => 'Sirus',
'body' => 'Hey there guys, it&#039;s been forever since we&#039;ve made a post on this page but rest assured we&#039;re all still very much alive and kicking!<br /><br />We&#039;re currently working on a v3 website that&#039;ll be changing the face of NIBL as you know it, with tons of new and cool features as well as a lot of new content! <br />It&#039;s slow going but we&#039;re half way there, and we need some help. <br /><br />So if you&#039;re a capable Web/IRC coder (PHP, Java, JavaScript, HTML/HTML5, MySQL) stop by our IRC channel and send Sirus or Jenga a message!'
);
array_push($news_array, $news_item);

show_template(
    "news",
    array(
        "news_array" => &$news_array,
		"channel_topic" => $channel_topic
    )
);

?>
