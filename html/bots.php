<?php

ini_set("memory_limit","1024M");

header('Content-Type: text/html; charset=utf-8');
ob_start("ob_gzhandler");
error_reporting(E_ALL);
//error_reporting(0);
function fatal_error_shutdown_handler()
{
    $last_error = error_get_last();
    if ($last_error["type"] === E_ERROR)
    {
        //error_handler(E_ERROR, $last_error["message"], $last_error["file"], $last_error["line"]);
        if (preg_match("/^Allowed memory size of \d+ bytes exhausted/", $last_error["message"]))
        {
            $error_msg = "Too many results! Please try again with a more specific query!";
            print function_exists("SimpleXHTMLWrapper") ? SimpleXHTMLWrapper("<p><strong>Error:</strong> " . htmlspecialchars($error_msg) . "</p>", "Error") : "Error: " . $error_msg;
        }
    }
}
register_shutdown_function("fatal_error_shutdown_handler");

$config["site_path"] = "";

require_once($config["site_path"] . "_includes/config.inc.php");
require_once($config["site_path"] . "_includes/common.inc.php");

setup_template();
$api = new Api();

$page = "bots";

$botid = null;
$botname = null;
$latest = null;
$search_query = null;
$searchall = isset($_REQUEST["searchall"]);

if (!$searchall)
{
    if (isset($_REQUEST["id"]) && trim($_REQUEST["id"]) != "" && intval($_REQUEST["id"]) > 0)
    {
        $botid = intval($_REQUEST["id"]);
    }
    if (isset($_REQUEST["bot"]) && trim($_REQUEST["bot"]) != "")
    {
        $botname = trim($_REQUEST["bot"]);
    }
    if (isset($_REQUEST["latest"]) && trim($_REQUEST["latest"]) != "")
    {
    	$latest = trim($_REQUEST["latest"]);
    }
}
if (isset($_REQUEST["search"]) && trim($_REQUEST["search"]) != "")
{
    $search_query = trim($_REQUEST["search"]);
}

if ($botid || $botname || $search_query || $latest)
{
	
	$botnames = array();
	// Get botlist ids -> names
	$url = $config["site_api"] . "/nibl/bots";
	$result = $api->call("GET", $url);
	foreach( $result['content'] as $bot ){
		$botnames[$bot['id']] = $bot['name'];
	
		if( ($botname && !$botid) && strtolower($bot['name']) == strtolower($botname) ) {
			$botid = $bot['id'];
		}
	}
	
	// We either get full result from bot using /packs or use search query using /search
	$url = $config["site_api"] . "/nibl";
	if( $botid && !$search_query ) {
		$url .= "/packs";
	} else if ( $latest ) {
		$url .= "/latest?size=100";
	} else {
		$url .= "/search";
	}
	
	if( $botid ) {
		$url .= "/$botid";
	}
	
	if( $search_query && !$latest ) {
		$url .= "?query=".urlencode($search_query);
	}
	
	$result = $api->call("GET", $url);
	$botlist_array = $result["content"];

    show_template(
        "bots_search",
        array(
            "botlist_array" => $botlist_array,
            "search_query" => $search_query,
            "search_query_error_vague" => isset($search_query_error_vague),
            "botid" => $botid,
            "botnames" => $botnames
        )
    );
    
    unset($botlist_array);
    exit;
}

if (isset($_REQUEST["id"]) && trim($_REQUEST["id"]) != "" && intval($_REQUEST["id"]) > 0)
{
	$botid = intval($_REQUEST["id"]);
	
	error("Botlisting for bot " . $botid . " goes here!");
}
else
{

    $result = $api->call("GET", $config["site_api"] . "/nibl/bots");
	$bots_array = $result["content"];
	
	function cmp($a, $b)
	{
		return strcmp($a['name'], $b['name']);
	}
	
	usort($bots_array, "cmp");

	if (count($bots_array) > 0)
	{
	    show_template(
	        "bots_list",
	        array(
	            "bots_array" => $bots_array
	        )
	    );
	}
else
{
    error("No bots found!");
}

}

?>
