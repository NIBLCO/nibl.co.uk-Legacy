<?php

function setup_template()
{
    global $config, $dwoo, $global_template_data, $session;

    $dwoo = new Dwoo;

    $global_template_data = array(
        "SITE_URL"          => $config["site_url"],
        "SITE_PATH"         => /*$config["relative_url"] .*/ $config["site_path"],
        "SITE_TITLE"        => $config["site_title"],
        "TEMPLATE_URL"      => $config["template_url"],
        "TEMPLATE_PATH"     => /*$config["relative_url"] .*/ $config["template_path"],
        "TEMPLATE_LIST"     => $config["template_list"],
        "TEMPLATE_NAME"     => $config["template_name"],
        "TEMPLATE_THEME"    => $config["template_theme"],
        "TEMPLATE_SUBTHEME" => $config["template_subtheme"],
    	"TEMPLATE_PENGUCOLOR" => $config["template_pengucolor"]
        //"SESSION"           => $session
    );
}

function show_template($template, $template_data = array())
{
    global $config, $dwoo, $global_template_data, $page, $arguments;

    if (file_exists($config["template_path"] . "/" . $template . ".tpl"))
    {
        $dwoo->output(
            $config["template_path"] . "/" . $template . ".tpl",
            array_merge(
                (isset($global_template_data) && is_array($global_template_data) ? $global_template_data : array()),
                array(
                    "PAGE" => (isset($page) ? $page : null),
                    "ARGUMENTS" => (isset($arguments) ? $arguments : null)
                ),
                $template_data
            )
        );
    }
    else
    {
        error("Unable to load template!", true, true);
    }
}

function get_exectime()
{
    global $starttime;
    if (!isset($starttime))
        return "?";

    $endtime = explode(" ", microtime());
    $endtime = $endtime[1] + $endtime[0];
    $exectime = $endtime - $starttime;

    return sprintf("%0.4f", round($exectime, 4));
}

function get_querycount()
{
    global $database;

    return $database->query_count;
}

function error($message, $die = false, $notemplate = false)
{
    global $config, $dwoo;

    if (!$notemplate)
        show_template(
            "error",
            array(
                "error_message" => $message
            )
        );

    if ($die)
        die($notemplate ? $message : null);
}

function SimpleXHTMLWrapper($body, $title = "")
{
    return <<<Heredoc
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>$title</title>
</head>
<body>
$body
</body>
</html>
Heredoc
;
}

function order2arrow($order = "ASC")
{
    return (strtoupper($order) == "DESC") ? "&#8593;" : "&#8595;";
}

function order_reverse($order = "ASC")
{
    return (strtoupper($order) == "DESC") ? "ASC" : "DESC";
}

/**
 * Return human readable sizes
 *
 * @author      Aidan Lister <aidan@php.net>
 * @version     1.3.0
 * @link        http://aidanlister.com/repos/v/function.size_readable.php
 * @param       int     $size        size in bytes
 * @param       string  $max         maximum unit
 * @param       string  $system      'si' for SI, 'bi' for binary prefixes
 * @param       string  $retstring   return string format
 */
function size_readable($size, $max = null, $system = 'bi', $retstring = '%01.2f %s')
{
    // Pick units
    $systems['si']['prefix'] = array('B', 'K', 'MB', 'GB', 'TB', 'PB');
    $systems['si']['size']   = 1000;
    $systems['bi']['prefix'] = array('B', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB');
    $systems['bi']['size']   = 1024;
    $sys = isset($systems[$system]) ? $systems[$system] : $systems['bi'];

    // Max unit to display
    $depth = count($sys['prefix']) - 1;
    if ($max && false !== $d = array_search($max, $sys['prefix'])) {
        $depth = $d;
    }

    // Loop
    $i = 0;
    while ($size >= $sys['size'] && $i < $depth) {
        $size /= $sys['size'];
        $i++;
    }

    return sprintf($retstring, $size, $sys['prefix'][$i]);
}

function stripslashes_recursive($value)
{
    $value = is_array($value) ? array_map("stripslashes_recursive", $value) : stripslashes($value);
    return $value;
}

?>
