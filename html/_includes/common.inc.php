<?php

$starttime = explode(" ", microtime());
$starttime = $starttime[1] + $starttime[0];

if (!strstr($_SERVER["HTTP_USER_AGENT"], "MSIE"))
    header("Content-Type: application/xhtml+xml; charset=utf-8");
else
    header("Content-Type: text/html; charset=utf-8");

/*
require_once("Cache/Lite.php");
$cache = new Cache_Lite(
    array(
        "cacheDir" => $config["includes_path"] . "/cache/",
        "lifeTime" => 5*60,
        "automaticSerialization" => true
    )
);
*/

require_once($config["includes_path"] . "/dwoo/dwooAutoload.php");
// require_once($config["includes_path"] . "/database2.class.php");
require_once($config["includes_path"] . "/api.class.php");
//session
require_once($config["includes_path"] . "/functions.inc.php");

if (get_magic_quotes_gpc())
{
    $_GET = array_map("stripslashes_recursive", $_GET);
    $_POST = array_map("stripslashes_recursive", $_POST);
    $_REQUEST = array_map("stripslashes_recursive", $_REQUEST);
    $_COOKIE = array_map("stripslashes_recursive", $_COOKIE);
}

?>
