<?php  

    if (!isset($_SESSION['USERID'])){
      redirect(web_root."index.php");
     }


  $INQID = $_GET['id'];
  $inquiry = New Inquiry();
  $singleinquiry = $inquiry->single_inquiry($INQID);
  $readinquiry = $inquiry->read_inquiry($INQID);

?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Inquiry Message</h1>
        </div>
          <!-- /.col-lg-12 -->
    </div>
    <form class="form-horizontal span6"  />
    <div class="row"> 
        <div class="form-group">
            <div class="col-md-8" style="margin-top:20px;" >
                <label class="col-md-4 control-label" for="idno">Sender Name</label>
                <div class="col-md-8">
                    <label><?php echo $singleinquiry->INQNAME; ?></label>
                </div>
            </div>
            <div class="col-md-8" style="margin-top:20px;" >
                <label class="col-md-4 control-label" for="idno">Sender Email</label>
                <div class="col-md-8">
                <a href=""><label class="text-primary text-underline"><?php echo $singleinquiry->INQEMAIL; ?></label></a>
                </div>
            </div>
            <div class="col-md-8" style="margin-top:20px;" >
                <label class="col-md-4 control-label" for="idno">Created On</label>
                <div class="col-md-8">
                    <input class="form-control" type="text" value="<?php echo $singleinquiry->INQDATECREATED; ?>" disabled>
                </div>
            </div>
            <div class="col-md-8" style="margin-top:20px;" >
                <label class="col-md-4 control-label" for="idno">Subject</label>
                <div class="col-md-8">
                    <input class="form-control" type="text" value="<?php echo $singleinquiry->INQSUBJ; ?>" disabled>
                </div>
            </div>
            <div class="col-md-8" style="margin-top:20px;">
                <label class="col-md-4 control-label" for="idno">Message Details</label>
                <div class="col-md-8">
                    <textarea class="form-control" rows="6" disabled><?php echo $singleinquiry->INQMSG; ?></textarea>
                </div>
            </div>    
        </div>

                   
                  
        <div class="form-group">
            <div class="col-md-8">
                <label class="col-md-4 control-label" for="idno"></label>
                <div class="col-md-8">
                    <button class="btn  btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-undo fw-fa"></span> Return</button>
                </div>
            </div>
        </div> 
    </div>
 
  
      
<!--/.fluid-container--> 
 </form>