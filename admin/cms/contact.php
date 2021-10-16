<?php
	check_message(); 
    require_once ("cmscontroller.php");
?>
<style type="text/css">
	.contact{
		margin: 30px 50px 0px 50px;
		width: 100%;
	}
	.contact_body{
		border-radius: 10px;
		border: 1px solid black;
		background-color: white;
		padding: 100px;
	}


	.msg1{
		margin: 1%;
		width: 45%;
		padding: 4%;
		float: left;
	}
	
	.msg{
		margin: 1%;
		width: 31.3%;
		padding: 4%;
		float: left;
	}
	.inquiry_body{
		border: 2px solid #8C6A48;
		border-radius: 10px;
		background-color: white;
		
	}

	.map .img-thumbnail{
		width: 85% !important;
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
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

/*input[type=submit] {
    background-color: #4CAF50 !important;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=submit]:hover {
    background-color: #45a049 !important;
}
*/
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

        .headtitle{
		width: 100%;
		margin-top: 10% !important;
		background:  #e7d5d0;
		padding: 2%;
		border: 2px solid #8C6A48;
	}

	.divtop{
		margin-top: 110% !important; 
	}
	}
		  @media only screen and (max-width: 768px) {
.content_body{
  margin: 50px;
  } 
}
</style>
<div class="content_body">
    <CENTER>
    <?php 
		$query = "SELECT * FROM `tblcontact` ";
        $mydb->setQuery($query);
        $cur = $mydb->loadSingleResult();
    ?>
 	<form action="cmscontroller.php?action=updatecontact" method="POST">
            <div style="margin-left:50px;">
                <div class="social inquiry_body msg1"><img src="../../img/name.png" style="width: 50px;"><hr>
                        <div class="row">
                        <div class="col-75">
                            <input type="text" id="facebook" name="name" placeholder="Lorem Ipsum Name" value='<?php echo $cur->CMS_CONTACT_NAME; ?>'>
                        </div>
                        </div>		    	
                    </div>

                    <div class="social inquiry_body msg1"><img src="../../img/location.png" style="width: 50px;"><hr>
                        <div class="row">
                        <div class="col-75">
                            <input type="text" id="instagram" name="address" placeholder="123 ABC City" value='<?php echo $cur->CMS_CONTACT_ADDRESS; ?>'>
                        </div>
                        </div>		    	
                    </div>

                    <div class="social inquiry_body msg1"><img src="../../img/email.png" style="width: 50px;"><hr>
                        <div class="row">
                        <div class="col-75">
                            <input type="text" id="twitter" name="email" placeholder="loremipsum@gmail.com" value='<?php echo $cur->CMS_CONTACT_EMAIL; ?>'>
                        </div>
                        </div>		    	
                    </div>

                    <div class="social inquiry_body msg1"><img src="../../img/phone.png" style="width: 50px;"><hr>
                        <div class="row">
                        <div class="col-75">
                            <input type="text" id="phone" name="phone" placeholder="0915-123-4567" value='<?php echo $cur->CMS_CONTACT_PHONE; ?>'>
                        </div>
                        </div>		    	
                    </div>
            </div>
			<br>
  			<br>
  			<div class="divtop" style="margin-top: 38%;">
            <center>
                <h4 class="title headtitle">Social Media</h4>  
            </center>			
  			<div class="social inquiry_body msg"><img src="../../img/facebook.png" style="width: 50px;"><hr>
				<div class="row">
			      <div class="col-75">
			        <input type="text" id="facebook" name="facebook" placeholder="www.facebook.com/VFSHOP" value='<?php echo $cur->CMS_CONTACT_FB; ?>'>
			      </div>
  				</div>		    	
			</div>

			<div class="social inquiry_body msg"><img src="../../img/instagram.png" style="width: 50px;"><hr>
				<div class="row">
			      <div class="col-75">
			        <input type="text" id="instagram" name="instagram" placeholder="www.instagram.com/VFSHOP" value='<?php echo $cur->CMS_CONTACT_IG; ?>'>
			      </div>
  				</div>		    	
			</div>

			<div class="social inquiry_body msg"><img src="../../img/twitter.png" style="width: 50px;"><hr>
				<div class="row">
			      <div class="col-75">
			        <input type="text" id="twitter" name="twitter" placeholder="www.twitter.com/VFSHOP" value='<?php echo $cur->CMS_CONTACT_TWT; ?>'>
			      </div>
  				</div>		    	
			</div>
			<br>
			<br>
            <center>
			<input type='submit' value="SAVE" name="updatecontactbtn" class="btn_style"><br>
            </center>
			<br>
			</form>
  		</center>
</div>