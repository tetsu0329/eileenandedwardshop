<?php
    require_once ("../../include/initialize.php");
    $action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

    switch ($action) {
        case 'updateaboutus' :
        doUpdateAboutUs();
        break;
        
        case 'updatemission' :
        doUpdateMission();
        break;

        case 'updatevision' :
        doUpdateVision();
        break;

        case 'updatecontact' :
        doUpdateContact();
        break;

        case 'updatebusinesslogo' :
        doUpdateBusinessLogo();
        break;

        case 'updateslider1info' :
        doUpdateSlider1Info();
        break;

        case 'updateslider2info' :
        doUpdateSlider2Info();
        break;

        case 'updateslider3info' :
        doUpdateSlider3Info();
        break;

        
    }
    function doUpdateAboutUs(){
	    if(isset($_POST['ourstorysave'])){
            $about = New About(); 
            $about->CMS_ABOUT_STORY = $_POST['aboutcontent'];
            $about->update();
  
            message("Our Story has been updated!", "success");
            redirect("index.php?view=About");
        } 
    }
    function doUpdateMission(){
	    if(isset($_POST['updtmissionbtn'])){
            $about = New About(); 
            $about->CMS_ABOUT_MISSION = $_POST['aboutmission'];
            $about->update();
  
            message("Mission has been updated!", "success");
            redirect("index.php?view=About");
        }
    }
    function doUpdateVision(){
	    if(isset($_POST['updtvisionbtn'])){
            $about = New About(); 
            $about->CMS_ABOUT_VISION = $_POST['aboutvision'];
            $about->update();
  
            message("Vision has been updated!", "success");
            redirect("index.php?view=About");
        }
    }
    function doUpdateContact(){
	    if(isset($_POST['updatecontactbtn'])){
            $contact = New Contact(); 
            $contact->CMS_CONTACT_NAME = $_POST['name'];
            $contact->CMS_CONTACT_ADDRESS = $_POST['address'];
            $contact->CMS_CONTACT_EMAIL = $_POST['email'];
            $contact->CMS_CONTACT_PHONE = $_POST['phone'];
            $contact->CMS_CONTACT_FB = $_POST['facebook'];
            $contact->CMS_CONTACT_IG = $_POST['instagram'];
            $contact->CMS_CONTACT_TWT = $_POST['twitter'];
            $contact->update();
  
            message("Contact Information has been updated!", "success");
            redirect("index.php?view=Contact");
        }
    }
    function doUpdateBusinessLogo(){
	    if(isset($_POST['logo'])){
            $about = New About(); 
            $target_dir = "../../images/home/";
            $target_file = $target_dir . substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"),0,5) . basename($_FILES["logo"]["name"]);
            
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            $check = getimagesize($_FILES["logo"]["tmp_name"]);
            if ($check == false)
                {
                    echo "<script type = 'text/javascript>alert'>alert('File is not an Image');
                    window.location.replace('index.php?view=Home');
                    </script>";
                    $uploadOk = 0;
                }
                if ($_FILES["logo"]["size"] > 10000000) 
                {
                    echo "<script type = 'text/javascript'>alert('Sorry, your file is too large');
                    window.location.replace('index.php?view=Home');
                    </script>";
                    $uploadOk = 0;
                }
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" &&
                    $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG" && $imageFileType != "GIF") 
                {
                    echo "<script type = 'text/javascript'>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');
                    window.location.replace('index.php?view=Home');
                    </script>";
                    $uploadOk = 0;
                }
                else 
                {
                    if (move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file))
                    {
                        $about->CMS_ABOUT_BUSINESSLOGO = $target_file;
                        $about->update();
                        message("Contact Information has been updated!", "success");
                        redirect("index.php?view=Home");
                    } 
                    else 
                    {
                        echo "<script type = 'text/javascript'>alert('Sorry, there was an error uploading your file.');
                        </script>";
                    }
                }  
        }
    }
    function doUpdateSlider1Info(){
	    if(isset($_POST['sliderbtn1'])){
            $slider = New Home(); 
            $target_dir = "../../images/home/";
            if($_POST["hiddenslider1"] != 0){
                $target_file = $target_dir . substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"),0,5) . basename($_FILES["slider1"]["name"]);
                $uploadOk = 1;
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                $check = getimagesize($_FILES["slider1"]["tmp_name"]);
                if ($check == false)
                    {
                        echo "<script type = 'text/javascript>alert'>alert('File is not an Image');
                        window.location.replace('index.php?view=Home');
                        </script>";
                        $uploadOk = 0;
                    }
                    if ($_FILES["slider1"]["size"] > 10000000) 
                    {
                        echo "<script type = 'text/javascript'>alert('Sorry, your file is too large');
                        window.location.replace('index.php?view=Home');
                        </script>";
                        $uploadOk = 0;
                    }
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" &&
                        $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG" && $imageFileType != "GIF") 
                    {
                        echo "<script type = 'text/javascript'>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');
                        window.location.replace('index.php?view=Home');
                        </script>";
                        $uploadOk = 0;
                    }
                    else 
                    {
                        if (move_uploaded_file($_FILES["slider1"]["tmp_name"], $target_file))
                        {
                            $slider->CMS_SLIDER_1_PICTURE = $target_file;

                        } 
                        else 
                        {
                            echo "<script type = 'text/javascript'>alert('Sorry, there was an error uploading your file.');
                            </script>";
                        }
                    }  
            }
            $slider->CMS_SLIDER_1_TITLE = $_POST["slider1-title"];
            $slider->CMS_SLIDER_1_SUBTITLE = $_POST["slider1-subtitle"];
            $slider->update();
            message("Slider 1 Information has been updated!", "success");
            redirect("index.php?view=Home");     
            
        }
    }
    function doUpdateSlider2Info(){
	    if(isset($_POST['sliderbtn2'])){
            $slider = New Home(); 
            $target_dir = "../../images/home/";
            if($_POST["hiddenslider2"] != 0){
                $target_file = $target_dir . substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"),0,5) . basename($_FILES["slider2"]["name"]);
                $uploadOk = 1;
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                $check = getimagesize($_FILES["slider2"]["tmp_name"]);
                if ($check == false)
                    {
                        echo "<script type = 'text/javascript>alert'>alert('File is not an Image');
                        window.location.replace('index.php?view=Home');
                        </script>";
                        $uploadOk = 0;
                    }
                    if ($_FILES["slider2"]["size"] > 10000000) 
                    {
                        echo "<script type = 'text/javascript'>alert('Sorry, your file is too large');
                        window.location.replace('index.php?view=Home');
                        </script>";
                        $uploadOk = 0;
                    }
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" &&
                        $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG" && $imageFileType != "GIF") 
                    {
                        echo "<script type = 'text/javascript'>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');
                        window.location.replace('index.php?view=Home');
                        </script>";
                        $uploadOk = 0;
                    }
                    else 
                    {
                        if (move_uploaded_file($_FILES["slider2"]["tmp_name"], $target_file))
                        {
                            $slider->CMS_SLIDER_2_PICTURE = $target_file;

                        } 
                        else 
                        {
                            echo "<script type = 'text/javascript'>alert('Sorry, there was an error uploading your file.');
                            </script>";
                        }
                    }  
            }
            $slider->CMS_SLIDER_2_TITLE = $_POST["slider2-title"];
            $slider->CMS_SLIDER_2_SUBTITLE = $_POST["slider2-subtitle"];
            $slider->update();
            message("Slider 2 Information has been updated!", "success");
            redirect("index.php?view=Home");     
            
        }
    }
    function doUpdateSlider3Info(){
	    if(isset($_POST['sliderbtn3'])){
            $slider = New Home(); 
            $target_dir = "../../images/home/";
            if($_POST["hiddenslider3"] != 0){
                $target_file = $target_dir . substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"),0,5) . basename($_FILES["slider3"]["name"]);
                $uploadOk = 1;
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                $check = getimagesize($_FILES["slider3"]["tmp_name"]);
                if ($check == false)
                    {
                        echo "<script type = 'text/javascript>alert'>alert('File is not an Image');
                        window.location.replace('index.php?view=Home');
                        </script>";
                        $uploadOk = 0;
                    }
                    if ($_FILES["slider3"]["size"] > 10000000) 
                    {
                        echo "<script type = 'text/javascript'>alert('Sorry, your file is too large');
                        window.location.replace('index.php?view=Home');
                        </script>";
                        $uploadOk = 0;
                    }
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" &&
                        $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG" && $imageFileType != "GIF") 
                    {
                        echo "<script type = 'text/javascript'>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');
                        window.location.replace('index.php?view=Home');
                        </script>";
                        $uploadOk = 0;
                    }
                    else 
                    {
                        if (move_uploaded_file($_FILES["slider3"]["tmp_name"], $target_file))
                        {
                            $slider->CMS_SLIDER_3_PICTURE = $target_file;

                        } 
                        else 
                        {
                            echo "<script type = 'text/javascript'>alert('Sorry, there was an error uploading your file.');
                            </script>";
                        }
                    }  
            }
            $slider->CMS_SLIDER_3_TITLE = $_POST["slider3-title"];
            $slider->CMS_SLIDER_3_SUBTITLE = $_POST["slider3-subtitle"];
            $slider->update();
            message("Slider 3 Information has been updated!", "success");
            redirect("index.php?view=Home");     
            
        }
    }
    
?>