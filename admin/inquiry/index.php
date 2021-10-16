<?php
require_once("../../include/initialize.php");
//checkAdmin();
	# code...
if(!isset($_SESSION['USERID'])){
	redirect(web_root."admin/index.php");
}

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

	$header=$view;
	$title="Inquiry"; 
	switch ($view) {

	case 'list' :
	 
		$content    = 'list.php';		
		break;

	case 'edit' :
		$header = "Read"; 
		$content    = 'read.php';
		break;
  

  	default :
	$title="Inquiry";
		$content    = 'list.php';
	}


   
 
require_once ("../theme/templates.php");
?>
  
