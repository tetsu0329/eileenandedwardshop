<?php
require_once ("../../include/initialize.php");
	 

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'read' :
	doRead();
	break;
	
	case 'delete' :
	doDelete();
	break;
	
}
function doDelete(){

    if (isset($_POST['selector'])==''){
        message("Select the records first before you delete!","error");
        redirect('index.php');
        }else{

        $id = $_POST['selector'];
        $key = count($id);

        for($i=0;$i<$key;$i++){ 

        $inquiry = New Inquiry();
        $inquiry->delete($id[$i]);

        message("Inquiry has been Deleted!","info");
        redirect('index.php');

        }
    }

}
?>