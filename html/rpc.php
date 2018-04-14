<?php

ini_set("memory_limit","1024M");

ob_start("ob_gzhandler");

$config["site_path"] = "";

require_once($config["site_path"] . "_includes/config.inc.php");
require_once($config["site_path"] . "_includes/common.inc.php");

$api = new Api();

setup_template();

$request = isset($_REQUEST["request"]) ? trim($_REQUEST["request"]) : die("Error: Invalid request!");

if ($request == "botlist")
{
    $botid = isset($_REQUEST["id"]) ? trim($_REQUEST["id"]) : die("Error: Invalid request!");
    $botname = isset($_REQUEST["name"]) ? trim($_REQUEST["name"]) : die("Error: Invalid request!");
    
    if($botid == "-1"){
    	
    	$botnames = array();
    	// Get botlist ids -> names
    	$url = "https://api.nibl.co.uk:8080/nibl/bots";
    	$result = $api->call("GET", $url);
    	foreach( $result['content'] as $bot ){
    		$botnames[$bot['id']] = $bot['name'];
    	}
    	
    	$result = $api->call("GET", "https://api.nibl.co.uk:8080/nibl/latest?size=100");
    	$botlist_array = $result["content"];
    	
        show_template(
            "bots_dropdown",
            array(
               "botid" => $botid,
               "botname" => $botname,
               "botlist_array" => $botlist_array,
               "botnames" => $botnames // Using this to pull botname from individual packs
            )
        );
        
    }else{
    	
    	$result = $api->call("GET", "https://api.nibl.co.uk:8080/nibl/packs/$botid");
    	$botlist_array = $result["content"];
    	
        show_template(
            "bots_dropdown",
            array(
                 "botid" => $botid,
                 "botname" => $botname,
                 "botlist_array" => $botlist_array
            )
        );
        
    }
}
else
{
    echo "Error: Invalid request!";
}

?>
