<?php 

if (!isset($_SESSION['CUSID'])){
redirect(web_root."index.php");
}
 

     

$customerid =$_SESSION['CUSID'];
$customer = New Customer();
$singlecustomer = $customer->single_customer($customerid);

  ?>
 
<?php 
  $autonumber = New Autonumber();
  $res = $autonumber->set_autonumber('ordernumber'); 
?>


<form onsubmit="return orderfilter()" action="customer/controller.php?action=processorder" method="post" >   
<section id="cart_items">
    <div class="container">
      <div class="breadcrumbs">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Order Details</li>
        </ol>
      </div>
      <div class="row">
    <div class="col-md-6 pull-left">
      <div class="col-md-2 col-lg-2 col-sm-2" style="float:left">
        Name:
      </div>
      <div class="col-md-8 col-lg-10 col-sm-3" style="float:left">
        <?php echo $singlecustomer->FNAME .' '.$singlecustomer->LNAME; ?>
      </div>
       <div class="col-md-2 col-lg-2 col-sm-2" style="float:left">
        Address:
      </div>
      <div class="col-md-8 col-lg-10 col-sm-3" style="float:left">
        <?php echo $singlecustomer->CUSHOMENUM . ' ' . $singlecustomer->STREETADD . ' ' .$singlecustomer->BRGYADD . ' ' . $singlecustomer->CITYADD . ' ' .$singlecustomer->PROVINCE . ' ' .$singlecustomer->COUNTRY; ?>
      </div>
    </div>

    <div class="col-md-6 pull-right">
    <div class="col-md-10 col-lg-12 col-sm-8">
    <input type="hidden" value="<?php echo $res->AUTO; ?>" id="ORDEREDNUM" name="ORDEREDNUM">
      Order Number :<?php echo $res->AUTO; ?>
    </div>
    </div>
 </div>
      <div class="table-responsive cart_info"> 
 
              <table class="table table-condensed" id="table">
                <thead >
                <tr class="cart_menu"> 
                  <th style="width:12%; align:center; ">Product</th>
                  <th >Description</th>
                  <th style="width:15%; align:center; ">Quantity</th>
                  <th style="width:15%; align:center; ">Price</th>
                  <th style="width:15%; align:center; ">Total</th>
                  </tr>
                </thead>
                <tbody>    
                       
              <?php

              $tot = 0;
                if (!empty($_SESSION['gcCart'])){ 
                      $count_cart = @count($_SESSION['gcCart']);
                      for ($i=0; $i < $count_cart  ; $i++) { 

                      $query = "SELECT * FROM `tblpromopro` pr , `tblproduct` p , `tblcategory` c
                           WHERE pr.`PROID`=p.`PROID` AND  p.`CATEGID` = c.`CATEGID`  and p.PROID='".$_SESSION['gcCart'][$i]['productid']."'";
                        $mydb->setQuery($query);
                        $cur = $mydb->loadResultList();
                        foreach ($cur as $result){ 
              ?>

                         <tr>
                         <!-- <td></td> -->
                          <td><img src="admin/products/<?php echo $result->IMAGES ?>"  width="50px" height="50px"></td>
                          <td><?php echo $result->PRODESC ; ?></td>
                          <td align="center"><?php echo $_SESSION['gcCart'][$i]['qty']; ?></td>
                          <td>&#8369 <?php echo  $result->PRODISPRICE ?></td>
                          <td>&#8369 <output><?php echo $_SESSION['gcCart'][$i]['price']?></output></td>
                        </tr>
              <?php
              $tot +=$_SESSION['gcCart'][$i]['price'];
                        }

                      }
                }
              ?>
            

                </tbody>
                
              </table>  
                <div class="  pull-right">
                  <p align="right">
                  <div > Total Price :   &#8369 <span id="sum">0.00</span></div>
                   <div > Delivery Fee : &#8369 <span id="fee">0.00</span></div>
                   <div> Overall Price : &#8369 <span id="overall"><?php echo $tot ;?></span></div>
                   <input type="hidden" name="alltot" id="alltot" value="<?php echo $tot ;?>"/>
                  </p>  
                </div>
 
      </div>
    </div>
  </section>
 
 <section id="do_action">
    <div class="container">
      <div class="heading">
        <h3>What would you like to do next?</h3>
      </div>
      <div class="row">
         <div class="row">
                   <div class="col-md-7">
              <div class="form-group">
                  <label> Payment Method : </label> 
                  <div class="radio" >
                      <label >
                          <input type="radio"  class="paymethod" name="paymethod" id="deliveryfee" value="Cash on Delivery" checked="true" data-toggle="collapse"  data-parent="#accordion" data-target="#collapseOne" >Cash on Delivery<br>
                          (Cut-off: Mondays, 12nn for <strong>Wednesday Afternoon Delivery)</strong><br>
                          (Cut-off: Wednesdays, 12nn for<strong> Saturday Afternoon Delivery<strong>) 
                        
                      </label>
                  </div> 
              </div> 
                        <div class="panel" > 
                                <div class="panel-body">
                                    <div class="form-group ">
                                      <label>Address where to deliver</label>

                                    
                                        <div class="col-md-12">
                                          <label class="col-md-6 control-label" for=
                                          "PLACE">Address:</label>

                                          <div class="col-md-6">
                                           <select class="form-control paymethod" name="PLACE" id="PLACE" onchange="addressonchange()" required> 
                                           <option value="">Select</option>
                                            <option value="50"><?php echo $singlecustomer->CITYADD ?></option>
                                            <option value="others">- PLEASE SPECIFY -</option>
                                          </select>
                                          </div>
                                        </div>
                                        <div class="col-md-12" id="otherpaymentdiv" style="visibility:hidden; margin-top:10px;">
                                          <label class="col-md-6 control-label" for=
                                          "PLACE">Other Delivery Address:</label>

                                          <div class="col-md-6">
                                          <input class="form-control" type="text" name="otherplace">
                                          </div>
                                        </div>
                                    </div>

                                </div>
                            <?php
                              $conn = mysqli_connect("localhost","root","","db_vgshop");
                              $querys=mysqli_query($conn,"select * from tblsummary where CUSTOMERID = '$customerid'");
                              if(mysqli_num_rows($querys) == NULL){

                             ?>

                              <div class="col-md-12">
                                <label class="col-md-6 control-label" for=
                                "PLACE">Pay the 50% of total fee if first order. <br>Send it through GCASH - 09123456789 and Enter the Reference Number</label>

                                <div class="col-md-6">
                                 <input type="text" class="form-control paymethod" name="reference" id="reference" placeholder="Reference Number"required> 
                                </div>

                              </div>  

                            <?php
                              }
                              else
                              {
                            ?>

                              <input type="hidden" class="form-control paymethod" name="reference" id="reference" value="NA"> 
                            <?php
                          }

                            ?>

      
                        <input type="hidden"  placeholder="HH-MM-AM/PM"  id="CLAIMEDDATE" name="CLAIMEDDATE" value="<?php echo date('y-m-d h:i:s') ?>"  class="form-control"/>

                   </div>  
    
                            </div> 
             
         
              </div>
<br/>
              <div class="row">
                <div class="col-md-6">
                    <a href="index.php?q=cart" class="btn btn-default pull-left"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;<strong>View Cart</strong></a>
                   </div>
                  <div class="col-md-6">
                      <button type="submit" class="btn btn-pup  pull-right " name="btn" id="btn" onclick="return validatedate();"   /> Submit Order <span class="glyphicon glyphicon-chevron-right"></span></button> 
                </div>  
              </div>
             
      </div>
    </div>
  </section><!--/#do_action-->
</form>
<script>
  function addressonchange(){
    var addressselection = $('#PLACE').find(":selected").val();
    if(addressselection == "others"){
      $('#otherpaymentdiv').css("visibility", "visible");

    }
    else{
      $('#otherpaymentdiv').css("visibility", "hidden");
    }
  }
</script>
