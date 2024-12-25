

<?php
//error_reporting(0);
define('Copyright', 'TG: cp567.cc');
define('ROOT_PATH', $_SERVER["DOCUMENT_ROOT"].'/');
include_once ROOT_PATH.'cnclass/config.php';
$sHome = include(ROOT_PATH.'cnclass/Port.php');
// print_r($sHome);exit;

//include_once ROOT_PATH.'main.php';exit;
if ($_SERVER["REQUEST_METHOD"] == "POST" && @$_POST['sid'] != null)
{
//	echo $_POST["sid"];exit;
	include_once ROOT_PATH.'main.php';
}else if($sHome == 1)
{
	include_once ROOT_PATH.'login.php';
}
else if ($sHome == 2)
{
    //daili
	include_once ROOT_PATH.'agent/login.php';
}
else if ($sHome == 3)
{
    //admin
	include_once ROOT_PATH.'foot/login.php';
}
else if ($sHome == 5)
{
    //导航页
	include_once ROOT_PATH.'indexdh.php';
}
else if ($sHome == 0)
{
	include_once ROOT_PATH.'404.html';
	
}

?>
