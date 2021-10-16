<?php
require_once ("../../include/initialize.php");
	 if (!isset($_SESSION['USERID'])){
      redirect(web_root."admin/index.php");
     }

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;
	
	case 'delete' :
	doDelete();
	break;

	case 'photos' :
	doupdateimage();
	break;

 
	}
   
	function doInsert(){
		if(isset($_POST['save'])){


		if ($_POST['supplier_name'] == "" OR $_POST['supplier_address'] == "" OR $_POST['supplier_num'] == "") {
			$messageStats = false;
			message("All field is required!","error");
			redirect('index.php?view=add');
		}else{	

			$autonumber = New Autonumber();
			$res = $autonumber->set_autonumber('supplier_id');

			$supplier = New Supplier();
			
			$supplier->supplier_name		= $_POST['supplier_name'];
			$supplier->supplier_address		= $_POST['supplier_address'];
			$supplier->supplier_num			=($_POST['supplier_num']);
			$supplier->fbname					=  $_POST['fbname'];
			$supplier->email_add					=  $_POST['email_add'];
			$supplier->create();

						// $autonum = New Autonumber(); 
						// $autonum->auto_update(2);

			message("New [". $_POST['supplier_name'] ."] created successfully!", "success");
			redirect("index.php");
			
		}
		}

	}

	function doEdit(){
	if(isset($_POST['save'])){

			$supplier = New Supplier(); 
			$supplier->supplier_name		= $_POST['supplier_name'];
			$supplier->supplier_address		= $_POST['supplier_address'];
			$supplier->supplier_num	=($_POST['supplier_num']);
			$supplier->fbname					=  $_POST['fbname'];
			$supplier->email_add					=  $_POST['email_add'];
			$supplier->update($_POST['supplier_id']);

			  message("[". $_POST['supplier_name'] ."] has been updated!", "success");
			redirect("index.php");
		}
	}


	function doDelete(){
		
		// if (isset($_POST['selector'])==''){
		// message("Select the records first before you delete!","info");
		// redirect('index.php');
		// }else{

		// $id = $_POST['selector'];
		// $key = count($id);

		// for($i=0;$i<$key;$i++){

		// 	$user = New User();
		// 	$user->delete($id[$i]);

		
				$id = 	$_GET['id'];

				$supplier = New Supplier();
	 		 	$supplier->delete($id);
			 
			message("User already Deleted!","info");
			redirect('index.php');
		// }
		// }

		
	}

	function doupdateimage(){
 
			$errofile = $_FILES['photo']['error'];
			$type = $_FILES['photo']['type'];
			$temp = $_FILES['photo']['tmp_name'];
			$myfile =$_FILES['photo']['name'];
		 	$location="photos/".$myfile;


		if ( $errofile > 0) {
				message("No Image Selected!", "error");
				redirect("index.php?view=view&id=". $_GET['id']);
		}else{
	 
				@$file=$_FILES['photo']['tmp_name'];
				@$image= addslashes(file_get_contents($_FILES['photo']['tmp_name']));
				@$image_name= addslashes($_FILES['photo']['name']); 
				@$image_size= getimagesize($_FILES['photo']['tmp_name']);

			if ($image_size==FALSE ) {
				message("Uploaded file is not an image!", "error");
				redirect("index.php?view=view&id=". $_GET['id']);
			}else{
					//uploading the file
					move_uploaded_file($temp,"photos/" . $myfile);
		 	
					 

						$user = New User();
						$user->USERIMAGE 			= $location;
						$user->update($_SESSION['USERID']);
						redirect("index.php");
						 
							
					}
			}
			 
		}
 
?>