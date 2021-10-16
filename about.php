<div class="row">           
                <div class="col-sm-12">                         
                    <h2 class="title text-center">About <strong>Us</strong></h2>                                   
                </div>                  
            </div>
<div class="w3-container w3-light-grey w3-row w3-center" style="padding: 100px 0px 0px 0px;">
  	</div>
	<!-- our story -->
	<div class="w3-container" style="padding: 10px 50px 0px 50px;">
	  <div class="w3-row-padding">
	  	<?php 
			$query = "SELECT * FROM `tblabout` ";
            $mydb->setQuery($query);
            $cur = $mydb->loadSingleResult();
        ?>
	  	<div class="w3-container w3-center">
		<center>
	      <img class="w3-image" src="<?php echo $cur->CMS_ABOUT_BUSINESSLOGO;?>" width="700" height="394">
		</center>
	    </div>
		
	    <div class="w3-container w3-center ourstory">
	      <h3>Our Story</h3>
	      <hr>
	      <p>
	      <p><?php echo $cur->CMS_ABOUT_STORY;?></p>
	      </p>
	    </div>
	  </div>
	</div>
	<!-- end * our story -->
<br>

<!-- mission vision -->
	<div class="w3-container w3-center ourstory" style="padding:0px 50px 50px 50px; margin-top: 2%;">
	  <div class="w3-row-padding">

	  	<div class="w3-col m6 misvis">
	      <center><h3>Mission</h3></center>
	      <p><?php echo $cur->CMS_ABOUT_MISSION;?></p>
	    </div>

	    <div class="w3-col m6 misvis">
	      <center><h3>Vision</h3></center>
	      <p><?php echo $cur->CMS_ABOUT_VISION;?></p>
	    </div>

	  </div>
	</div>
<!-- end * mission vision -->
			<!-- why choose us -->
	<div class="w3-container chooseus" style="padding:0px 50px 50px 50px; margin-top: 2%; ">
	<center>
	  <h3 class="w3-center">Why Choose Us?</h3>
	  <div class="w3-row-padding w3-center" style="margin-top:64px">
	    <div class="w3-quarter">
	      <i><img src="img/highquality.jpg" style="width: 80px;"></i>
	      <p class="w3-large">High Quality</p>
	      <p>"Quality is never an accident. The quality of a leader is reflected in the standards they set for." - Anonymous</p>
	    </div>
	    <div class="w3-quarter">
	      <i><img src="img/affordableicon.png" style="width: 60px;"></i>
	      <p class="w3-large">Affordable</p>
	      <p>“Price ain't merely about numbers. It's a satisfying sacrifice.”  - Toba Beta</p>
	    </div>
		<div class="w3-quarter">
		    <i><img src="img/accomodating.png" style="width: 60px;"></i>
		    <p class="w3-large">Accomodating</p>
		      <p>We have very accomondating personnel and staff so why don't you stop by our store or ask online</p>
		</div>
	  </div>
	</center>
	</div>
	<!-- end * why choose us -->