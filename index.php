<!-- anthe template version 1.0 -->
<!-- font, favicon and css links here -->
<?php
header('Content-type: text/html; charset=utf-8');
echo('<meta name="viewport" content="width=device-width, initial-scale=1.0">');

$pages = "pages/";
$db = "db/";
$lib = "lib/";

$allowedpages = array_diff(scandir($pages), array('..', '.'));

if (isset($_GET['page']))
{
	$page = $_GET['page'];
}
else
{
	$page = 'default';
}
if(!in_array($page, $allowedpages))
{
	$page = 'default';
}

include("start.php");

$pathprefix = "pages/$page/";
include("$pathprefix/$page.php");
?>