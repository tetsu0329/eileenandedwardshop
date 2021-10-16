<?php
	check_message(); 
    require_once ("dashboardcontroller.php");
?>
<style type="text/css">
	body{
		 margin: 0;
		 
	}

	.msg1{
		margin: 1%;
		width: 23%;
		padding: 4%;
		float: left;
	}
	
	.msg{
		margin: 1%;
		width: 31.3%;
		padding: 4%;
		float: left;
	}
    .graph{
		margin: 1%;
		width: 47%;
		padding: 1%;
		float: left;
	}
	.inquiry_body{
		border: 2px solid #8C6A48;
		border-radius: 10px;
		background-color: white;
		
	}
	.inquiry_body:hover{
		background-color: #e7d5d0;
	}
	
	.order_body{
		border: 2px solid #8C6A48;
		border-radius: 10px;
		background-color: white;
		
	}
	.order_body:hover{
		background-color: #e7d5d0;
	}

	.title{
		letter-spacing: 15px;
		color: #8C6A48;
		text-align: center;
	}

	hr{
		background-color: #8C6A48;
		height: 1px;
	}

	@media screen and (max-width: 600px) {
  .content_body{
    margin-left: 10px;
    margin-top: 30px;  }

    .msg1{
		margin: 1%;
		width: 100%;
		padding: 4%;
		float: left;
	}
	.msg{
		margin: 1%;
		width: 100%;
		padding: 4%;
		float: left;
	}
    .graph{
		margin: 1%;
		width: 130%;
		padding: 4%;
		float: left;
        background-color:red;
	}
	}

	  @media only screen and (max-width: 768px) {

        .content_body{
        margin: 10px;
        } 
}

</style> 
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Bulbs', 'Total Sales per Day'],
  ['Flowers', 8],
  ['Fruits', 2],
  ['Leaves', 4],
  ['Roots', 2],
  ['Seeds', 8]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Total Sales', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
  var chart2 = new google.visualization.BarChart(document.getElementById('piechart2'));
  chart2.draw(data, options);
}
</script>
<div class="content_body">	 
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Dashboard </h1>
    </div>
    <div class="col-lg-12">
    	<div class="container">      
  			<div class="inquiry_body msg1"><p style="font-size: 30px; color:black;"><?php echo $inquiryUnreadNum; ?><label style="font-size: 20px; margin-left:10px; color:#0275d8;">UNREAD</label></p><p style="font-size: 30px;color:black;"><?php echo $inquiryReadNum; ?><label style="font-size: 20px; margin-left:10px; color:#5cb85c;">READ</label></p><p style="font-size: 30px"><?php echo ""; ?><label style="font-size: 20px; margin-left:10px;"></label></p><hr><img src="../img/inquiry.png" width="20px;"><p style="font-size: 20px">INQUIRY</p></div>
  			<div class="inquiry_body msg1" ><p style="font-size: 30px; color:black;"><?php echo $orderPendingNum; ?><label style="font-size: 20px; margin-left:10px;color:#f0ad4e;"> <a class="pending" href="<?php echo web_root; ?>admin/orders?status=Pending">PENDING</a></label></p><p style="font-size: 30px; color:black;"><?php echo $orderConfirmedNum; ?><label style="font-size: 20px; margin-left:10px;color:#0275d8;"><a class="confirmed" href="<?php echo web_root; ?>admin/orders?status=Confirmed">CONFIRMED</a></label></p><p style="font-size: 30px;color:black;"><?php echo $orderDeliveredNum; ?><label style="font-size: 20px; margin-left:10px;color:#5cb85c;"><a class="delivered" href="<?php echo web_root; ?>admin/orders?status=Delivered">DELIVERED</a></label></p><hr><img src="../img/orders.png" width="20px;"><p style="font-size: 20px">ORDER</p></div>
  			<div class="inquiry_body msg1"><p style="font-size: 30px; color:black;"><?php echo $userActiveNum; ?><label style="font-size: 20px; margin-left:10px;color:#5cb85c;">ACTIVE</label></p><p style="font-size: 30px; color:black;"><?php echo $userInactiveNum; ?><label style="font-size: 20px; margin-left:10px;color:#f0ad4e;">INACTIVE</label></p><p style="font-size: 30px"><?php echo ""; ?><label style="font-size: 20px; margin-left:10px;"></label></p><hr><img src="../img/users.png" width="20px;"><p style="font-size: 20px">USERS</p></div>
  			<div class="inquiry_body msg1"><p style="font-size: 30px; color:black;"><?php echo $productActiveNum; ?><label style="font-size: 20px; margin-left:10px;color:#5cb85c;">ACTIVE</label></p><p style="font-size: 30px; color:black;"><?php echo $productInactiveNum; ?><label style="font-size: 20px; margin-left:10px;color:#f0ad4e;">INACTIVE</label></p><p style="font-size: 30px"><?php echo ""; ?><label style="font-size: 20px; margin-left:10px;"></label></p><hr><img src="../img/products.png" width="20px;"><p style="font-size: 20px">PRODUCTS</p></div>
  			<br>
  			<br>
  			<br>
            <div style="margin-top: 35%;">
  			<p style="font-size: 20px" class="title">GRAPH</p>
  			<hr>
			  
            <div class="graph" style="margin-left:300px;">
                <div style="min-height:415px;">
				<center>
                <div id="piechart"></div>
                </div>
				</center>
            </div>
  		</div>
    </div>
</div>
</div>