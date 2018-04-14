<?php
require_once("../_includes/config.inc.php");
require_once("../_includes/functions.inc.php");
require_once("../_includes/database2.class.php");

setup_database();

$uri = explode("/", $_SERVER['REQUEST_URI']);
$uri = $uri[ count($uri) - 1];

$sth = $database->db->prepare('SELECT * FROM ooinuza.redirect WHERE HEX(id) = ?', array('text'), MDB2_PREPARE_RESULT);
$redirectResult = $sth->execute($uri);

if ( ($row = $redirectResult->fetchRow()) != null) {
	header("Location: ".$row['value']);
} else {
	header("Location: http://nibl.co.uk/");
}

?>