<?php

if (!isset($config["site_path"]) or $config["site_path"] == "")
    $config["site_path"] = "./";

if (!is_dir($config["site_path"]))
    die("Invalid site path!");

$config["site_title"]       = "nibl";
$config["site_url"]         = "http://nibl.co.uk";
$config["site_api"]         = "http://niblapi";
$config["includes_path"]    = $config["site_path"] . "_includes";

$config["template_list"]    = array(
    "default" => array(
        "name" => "default",
        "fullname" => "Default",
        "theme" => "default",
        "subtheme" => null,
    	"pengucolor" => "#fddc98"
    ),
    "default-fullwidth" => array(
        "name" => "default-fullwidth",
        "fullname" => "Default (Full width)",
        "theme" => "default",
        "subtheme" => "fullwidth",
    	"pengucolor" => "#fddc98"
    ),
    "default-greenpurple" => array(
        "name" => "default-greenpurple",
        "fullname" => "Green/Purple",
        "theme" => "default",
        "subtheme" => "greenpurple",
    	"pengucolor" => "#bafd98"
    ),
    "default-greenpurple-fullwidth" => array(
        "name" => "default-greenpurple-fullwidth",
        "fullname" => "Green/Purple (Full width)",
        "theme" => "default",
        "subtheme" => "greenpurple-fullwidth",
    	"pengucolor" => "#bafd98"
    ),
    "default-blue" => array(
        "name" => "default-blue",
        "fullname" => "Blue",
        "theme" => "default",
        "subtheme" => "blue",
    	"pengucolor" => "#98bafd"
    ),
	"default-kittie" => array(
        "name" => "default-kittie",
        "fullname" => "Kittie",
        "theme" => "default",
        "subtheme" => "kittie",
		"pengucolor" => "#98bafd"
    )
);
$config["templates_path"]   = $config["site_path"] . "templates";
$config["template_name"]    = (isset($_COOKIE["theme"]) && array_key_exists($_COOKIE["theme"], $config["template_list"])) ? $_COOKIE["theme"] : "default";
$config["template_theme"] = $config["template_list"][$config["template_name"]]["subtheme"];
$config["template_subtheme"] = $config["template_list"][$config["template_name"]]["subtheme"];
$config["template_pengucolor"] = $config["template_list"][$config["template_name"]]["pengucolor"];
//$config["template_path"]    = $config["templates_path"] . "/" . $config["template_name"];
$config["template_path"]    = $config["templates_path"] . "/" . $config["template_list"][$config["template_name"]]["theme"];
$config["template_url"]     = $config["site_url"] . "/" . $config["templates_path"] . "/" . $config["template_name"];

$config["content_path"]     = $config["site_path"] . "_content";

//$config["dsn"]              = "mysql://ooinuza:niblempire@localhost/ooinuza";
$config["dsn"]              = "mysql://ooinuza:niblempire@127.0.0.1/ooinuza";
//$config["db_prefix"]        = "nibl_";

?>
