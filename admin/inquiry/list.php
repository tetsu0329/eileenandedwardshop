<?php
	check_message(); 
?> 
		 
		<div class="row">
       	 <div class="col-lg-12">
            <h1 class="page-header">Inquiries</h1>
       		</div>
        	<!-- /.col-lg-12 -->
   		 </div>
			    <form action="inquirycontroller.php?action=delete" Method="POST">  	
			    <div class="table-responsive">				
				<table id="dash-table"  class="table table-striped table-bordered table-hover "  style="font-size:12px" cellspacing="0" >					
			    <thead>
				  	<tr> 
				  		<th width="1%">#</th>
				  		<!-- <th>Model</th>  -->
				  		<!-- <th align="left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> Product</th>  -->
                        <th>Sender</th>  
				  		<th>Date Created</th>
                        <th>Subject</th> 
                        <th>Status</th>
				  		<!-- <th>Action</th>  -->
				  		 
				  	</tr>	
				  </thead> 	

			  <tbody>
				  	<?php 
				  		$query = "SELECT * FROM `tblinquiry` ";
                    $mydb->setQuery($query);
                    $cur = $mydb->loadResultList();

                  foreach ($cur as $result) { 
                    echo '<tr>';
                    echo '<td width="1%" align="center"><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->INQID. '"/></td>';
                    echo '<td>'.$result->INQNAME.'</td>'; 	
                    // echo '<td><a title="edit" href="'.web_root.'admin/products/index.php?view=edit&id='.$result->PROID.'"><i class="fa fa-pencil "></i> ' . $result->PROMODEL.'</a></td>';
                  echo '<td>'. $result->INQDATECREATED.'</td>'; 	
                    echo '<td><a title="edit" href="'.web_root.'admin/inquiry/index.php?view=edit&id='.$result->INQID.'"><i class="fa fa-pencil "></i> '.$result->INQSUBJ.' </a></td>';
                    
                    echo '<td>'. $result->INQSTATUS.'</td>'; 
                    echo '</tr>';  
				  		// echo '<td><a href="controller.php?action=delete&id='.$result->PROD.'" class="btn btn-danger">delete</a></td>';

				  		
				  		// if ($result->PROSTATS=='Available'){
				  		// 	$stats = 'Available';
				  		// }else{
				  		// 	$stats = 'NotAvailable';
				  		// }
				  	// 	echo
				  	// 	 '<td align="left">
							// <a href="'.web_root.'admin/products/controller.php?action=edit&id='.$result->PROID.'&stats='.$stats.'" class="btn btn-primary btn-xs">'.$stats.'</a>
							// <a href="settings.php?id='.$result->PROID.'" data-toggle="lightbox"  class="btn btn-primary btn-xs">Set Discount</a>
				  	// 	 </td>';
				  	    } 
				  	?>
				  </tbody>
				</table>

				<div class="btn-group">
				  <!-- <a href="index.php?view=add" class="btn btn-default">New</a> -->
				  <button type="submit" class="btn btn-default" name="delete"><i class="fa fa-trash fw-fa"></i> Delete Selected</button>
				</div>
				</div>
				</form>

                