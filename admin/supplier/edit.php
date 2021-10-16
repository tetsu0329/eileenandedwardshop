<?php  
     if (!isset($_SESSION['USERID'])){
      redirect(web_root."admin/index.php");
     }

     $supplier_id = $_GET['id'];
     $supplier = New Supplier();
     $singlesupplier = $supplier->single_supplier($supplier_id);

?> 

 <form class="form-horizontal span6" action="controller.php?action=edit" method="POST">

          <fieldset>
            <legend> Update Supplier</legend>
                   
                    <!-- <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "user_id">User Id:</label> -->

                      <!-- <div class="col-md-8"> -->
                        
                         <input class="form-control input-sm" id="supplier_id" name="supplier_id" placeholder=
                            "-" type="Hidden" value="<?php echo $singlesupplier->supplier_id; ?>">
                   <!--    </div>
                    </div>
                  </div>      -->      
                  
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "supplier_name">Name:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="supplier_name" name="supplier_name" placeholder=
                            "Account Name" type="text" value="<?php echo $singlesupplier->supplier_name; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "supplier_address">Address:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="supplier_address" name="supplier_address" placeholder=
                            "Address" type="text" value="<?php echo $singlesupplier->supplier_address; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "supplier_num">Contact Number:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="supplier_num" name="supplier_num" placeholder=
                            "Contact Number" type="text" value="<?php echo $singlesupplier->supplier_num; ?>">

                            
                      

                            
                      </div>
                    </div>
                  </div>

                 
                    
                  
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "fbname">Facebook Name:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="fbname" name="fbname" placeholder=
                            "Facebook Name" type="text" value="<?php echo $singlesupplier->fbname; ?>">
                            </div>
                    </div>
                  </div>

                    <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "email_add">Email Address:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="email_add" name="email_add" placeholder=
                            "Email Address" type="email" value="<?php echo $singlesupplier->email_add; ?>">
                            </div>
                            

                            </div>
                 
                            </div>
            
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                         <button class="btn btn-primary " name="save" type="submit" ><span class="fa fa-save fw-fa"></span> Save</button>
                          <!-- <a href="index.php" class="btn btn-info"><span class="fa fa-arrow-circle-left fw-fa"></span>&nbsp;<strong>List of Users</strong></a> -->
                      </div>
                    </div>
                  </div>

              
          </fieldset> 

        <div class="form-group">
                <div class="rows">
                  <div class="col-md-6">
                    <label class="col-md-6 control-label" for=
                    "otherperson"></label>

                    <div class="col-md-6">
                   
                    </div>
                  </div>

                  <div class="col-md-6" align="right">
                   

                   </div>
                  
              </div>
              </div>
          
        </form>
      

        </div><!--End of container-->