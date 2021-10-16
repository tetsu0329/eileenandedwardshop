<?php
require_once("../../include/initialize.php");
//checkAdmin();
	# code...
if(!isset($_SESSION['USERID'])){
	redirect(web_root."admin/index.php");
}

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

	$header=$view;
	$title="Content Management"; 
	switch ($view) {

    case "About" :
        $title = "CMS";
        $content = "about.php";
		break;

	case "Contact" :
			$title = "CMS";
			$content = "contact.php";
			break;
	
	case "Home" :
		$title = "CMS";
		$content = "home.php";
		break;
	}

require_once ("../theme/templates.php");
?>