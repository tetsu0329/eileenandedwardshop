<style type="text/css">
	.contact{
		margin: 30px 50px 0px 50px;
		width: 85%;
	}
	.contact_body{
		border-radius: 10px;
		border: 1px solid black;
		background-color: white;
		padding: 100px;
	}
	.img-thumbnail{
		margin: 1%;
		width: 40%;
		padding: 4%;
	}

	.map .img-thumbnail{
		width: 85% !important;
		background: #f9f9f9;
		border: 1px solid #8C6A48;
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

	* {
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    margin-top: 10px;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #028A0F;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    margin-top: 10px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #8C6A48;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 100%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

	.title{
		letter-spacing: 15px;
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

    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }

    .btn_style {
    	margin-top: 2% !important;
    	margin-bottom: 2% !important;
    }

    .headtitle{
		width: 100%;
		margin-top: 10% !important;
		background:  #e7d5d0;
		padding: 2%;
		border: 2px solid #8C6A48;
	}
	}


	  @media only screen and (max-width: 768px) {
.content_body{
  margin: 50px;
  } 
}

</style>
<div class="content_body">
<center>  
     	<br>
     <h4 class="title headtitle">Logo</h4> 
     <br>
	 <?php 
		$query = "SELECT * FROM `tblabout` ";
		$mydb->setQuery($query);
		$cur = $mydb->loadSingleResult();
    ?>
   			<div class="map">
			   <form action="cmscontroller.php?action=updatebusinesslogo" method="POST" enctype="multipart/form-data">
				<div class="img-thumbnail">
					<img src="<?php echo $cur->CMS_ABOUT_BUSINESSLOGO; ?>" width="50%;" id='logo'>
					<br><br>
					<center><input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp"  name="logo" value="Choose Photo" accept="image/*" onchange="loadlogo(event)">
					<input type='submit' name='logo' value='Save' class="btn_style"></center>	
				</div>
				</form>
			</div>
			<script>
			var loadlogo = function(event) {
				var output = document.getElementById('logo');
				output.src = URL.createObjectURL(event.target.files[0]);
				};
			</script>
		<br>
	<h4 class="title headtitle">Slider Images</h4> 
	<br>
	<?php 
		$query = "SELECT * FROM `tbl_homeinfo` ";
		$mydb->setQuery($query);
		$sliderinfo = $mydb->loadSingleResult();
    ?>
			<div class="map">
				<form action="cmscontroller.php?action=updateslider1info" method="POST" enctype="multipart/form-data">
				<div class="img-thumbnail "><b class="title">Slider 1</b>
				<br><br>
				<center><img src="<?php echo $sliderinfo->CMS_SLIDER_1_PICTURE; ?>" width="50%;" id='slider1'></center>
				<br><br>
				<input type="file" class="form-control-file" name='slider1'id="exampleInputFile" aria-describedby="fileHelp" value="Choose Photo" accept="image/*" onchange="loadslider1(event)">
				<input type="text" id="silder-title" name="slider1-title" placeholder="Slider 1 Title" value='<?php echo $sliderinfo->CMS_SLIDER_1_TITLE; ?>'>
                <input type="text" id="silder-subtitle" name="slider1-subtitle" placeholder="Slider 1 Sub-title" value='<?php echo $sliderinfo->CMS_SLIDER_1_SUBTITLE; ?>'>
				<input type="hidden" value="0" id="hiddenslider1" name="hiddenslider1">
                <input type='submit' name='sliderbtn1' value='Save' class="btn_style">
				
					
				</form>
				</div>
				
				<script>
				var loadslider1 = function(event) {
					var output = document.getElementById('slider1');
					output.src = URL.createObjectURL(event.target.files[0]);
					document.getElementById('hiddenslider1').value = "1";
					};
				</script>
			</div>
			<br><br>
			<div class="map">
				<div class="img-thumbnail"><b class="title">Slider 2</b><br><br>
				<form action="cmscontroller.php?action=updateslider2info" method="POST" enctype="multipart/form-data">
					<center><img src="<?php echo $sliderinfo->CMS_SLIDER_2_PICTURE; ?>" width="50%;" id='slider2'></center>
				<br><br>
				<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp"  name="slider2" value="Choose Photo" accept="image/*" onchange="loadslider2(event)">
				<input type="text" id="silder-title" name="slider2-title" placeholder="Slider 2 Title" value='<?php echo $sliderinfo->CMS_SLIDER_2_TITLE; ?>'>
                <input type="text" id="silder-subtitle" name="slider2-subtitle" placeholder="Slider 2 Sub-title" value='<?php echo $sliderinfo->CMS_SLIDER_2_SUBTITLE; ?>'>
				<input type="hidden" value="0" id="hiddenslider2" name="hiddenslider2">
                <input type='submit' name='sliderbtn2' value='Save'  class="btn_style">
				
				</form>
				</div>
				<script>
				var loadslider2 = function(event) {
					var output = document.getElementById('slider2');
					output.src = URL.createObjectURL(event.target.files[0]);
					document.getElementById('hiddenslider2').value = "1"
					};
				</script>
			</div>
			<br><br>
			<div class="map">
				<div class="img-thumbnail"><b class="title">Slider 3</b><br><br>
				<form action="cmscontroller.php?action=updateslider3info" method="POST" enctype="multipart/form-data">
					<center><img src="<?php echo $sliderinfo->CMS_SLIDER_3_PICTURE; ?>" width="50%;" id='slider3'></center>
				<br><br>
				<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp"  name="slider3" value="Choose Photo" accept="image/*" onchange="loadslider3(event)">
				<input type="text" id="silder-title" name="slider3-title" placeholder="Slider 3 Title" value='<?php echo $sliderinfo->CMS_SLIDER_3_TITLE; ?>'>
                <input type="text" id="silder-subtitle" name="slider3-subtitle" placeholder="Slider 3 Sub-title" value='<?php echo $sliderinfo->CMS_SLIDER_3_SUBTITLE; ?>'>
				<input type="hidden" value="0" id="hiddenslider3" name="hiddenslider3">
                <input type='submit' name='sliderbtn3' value='Save'  class="btn_style">
				
				</form>
				</div>
				<script>
				var loadslider3 = function(event) {
					var output = document.getElementById('slider3');
					output.src = URL.createObjectURL(event.target.files[0]);
					document.getElementById('hiddenslider3').value = "1"
					};
				</script>
			</div>
			<br>
  		</center>
</div>