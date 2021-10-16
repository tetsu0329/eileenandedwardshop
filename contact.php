 <div id="contact-page" class="container">
        <div class="bg">
            <div class="row">           
                <div class="col-sm-12">                         
                    <h2 class="title text-center">Contact <strong>Us</strong></h2>                                                      
                    <div id="gmap" class="contact-map">
                    </div>
                </div>                  
            </div>
            <form class="form-horizontal span6" action="customer/controller.php?action=inquire" method="POST" enctype="multipart/form-data"    >  
            <div class="row">   
                <div class="col-sm-8">
                    <div class="contact-form">
                        <h2 class="title text-center">Get In Touch</h2>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
                            </div>                        
                            <div class="form-group col-md-12">
                                <input type="submit" name="submitinquiry" class="btn btn-primary pull-right" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-info">
                        <h2 class="title text-center">Contact Info</h2>
                        <?php
                            $query = "SELECT * FROM `tblcontact` ";
                            $mydb->setQuery($query);
                            $contactcur = $mydb->loadSingleResult();
                        ?>
                        <address>
                            <p><?php echo $contactcur->CMS_CONTACT_NAME ?></p>
                            <p><?php echo $contactcur->CMS_CONTACT_ADDRESS ?></p>
                            <p>Mobile: <?php echo $contactcur->CMS_CONTACT_PHONE ?></p>
                            <p>Email: <?php echo $contactcur->CMS_CONTACT_EMAIL ?></p>
                        </address>
                        <div class="social-networks">
                            <h2 class="title text-center">Social Networking</h2>
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>              
            </div> 
            </form> 
        </div>  
    </div><!--/#contact-page-->