<?php
	check_message(); 
    require_once ("cmscontroller.php");
?>
<style type="text/css">

.about{
    margin: 30px 50px 0px 50px;
    width: 85%;
}
.about_body{
    border-radius: 10px;
    border: 1px solid black;
    background-color: white;
    padding:30px;
}

    .btn_style{
    background-color: #028A0F !important;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 40%;

}

.btn_style:hover{
        background-color: transparent !important;
border: 2px solid #466D1D;
color: #8C6A48;

}
.fr-toolbar, .fr-desktop, .fr-top, .fr-basic, .fr-sticky-off{
    z-index: 0;
}

    .title{
    letter-spacing: 5px;
    color: #466D1D;
    text-align: center;
    text-transform: uppercase;
}

.headtitle{
    background:  #5DBB63;
    width: 50%;
    padding: 2%;
    border: 2px solid #8C6A48;
}
hr{
    background-color: #8C6A48;
    height: 1px;
}

@media screen and (max-width: 600px) {
.content_body{
margin-left: 50px;
margin-top: 30px;  }

    .btn_style {
    margin-top: 2% !important;
    margin-bottom: 2% !important;
    width: 100%;
}

.headtitle{
    width: 100%;
    margin-top: 10% !important;
    background:  #e7d5d0;
    padding: 2%;
    border: 2px solid #8C6A48;
}

.about{
    width: 100%;
    margin: 0;
}
}
      @media only screen and (max-width: 768px) {
.content_body{
margin: 50px;
} 
}
</style>

<div class="content_body">
    <br>
    <center>
    	<div><b class="title headtitle">Our Story</b></div>
    	<br>
    	<div class="about">
			<div class="about_body">
            <?php 
				  	$query = "SELECT * FROM `tblabout` ";
                    $mydb->setQuery($query);
                    $cur = $mydb->loadSingleResult();
            ?>
			<form action="cmscontroller.php?action=updateaboutus" Method="POST"> 
				<textarea class="form-control p-input" id="aboutcontent" rows="20" name="aboutcontent" ><?php echo $cur->CMS_ABOUT_STORY;?></textarea> 
					<br><br>
                    <script>
                        CKEDITOR.replace( 'aboutcontent' );
                    </script>
		    <input type= 'submit' name='ourstorysave' value= 'UPDATE' class="btn_style">
			</div>
		</div>
        </form>
		<br>
		 	<div class="about">
		 		<div><b class="title headtitle">Mission</b></div>
				<br><br>
			<div class="about_body">
				

			<form action="cmscontroller.php?action=updatemission" method='POST'>
				<textarea class="form-control p-input" id="aboutmission" rows="20" name="aboutmission" ><?php echo $cur->CMS_ABOUT_MISSION;?></textarea> 
					<br><br>
                <script>
                        CKEDITOR.replace( 'aboutmission' );
                </script>
		<input type= 'submit' name='updtmissionbtn' value= 'UPDATE' class="btn_style">
			</div>
		</div>
		
		</form>
			<br>
		 	<div class="about">
				<div><b class="title headtitle">Vision</b></div>
				<br><br>
			<div class="about_body">
			<form action="cmscontroller.php?action=updatevision" method='POST'>
				<textarea class="form-control p-input" id="aboutvision" rows="20" name="aboutvision" ><?php echo $cur->CMS_ABOUT_VISION; ?></textarea> 
					<br><br>
                    <script>
                        CKEDITOR.replace( 'aboutvision' );
                    </script>
		<input type= 'submit' name='updtvisionbtn' value= 'UPDATE' class="btn_style">
			</div>
		</div>
		
		</form>
	</center>
</div>
<br>