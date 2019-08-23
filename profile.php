<?php
session_start();
include("administrator/db.php");
if(!isset($_SESSION["userEmail"]) || $_SESSION["userEmail"]==""){
	header("Location: index.html");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Goods Shipping Management System :: User Profile</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    <link href="css/ui-lightness/jquery-ui-1.10.0.custom.min.css" rel="stylesheet">
    
    <link href="css/base-admin-3.css" rel="stylesheet">
    <link href="css/base-admin-3-responsive.css" rel="stylesheet">
    
    <link href="css/pages/plans.css" rel="stylesheet"> 

    <link href="css/custom.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <style>
    	.form-group label{
    		text-align: right;
    	}
    	.pills_container{
    		margin-bottom: 15px;
    	}
    	.pill{
    		text-align: center;
		    padding: 10px 0px;
		    border: 1px solid #292929;
		    margin-left: 5px;
		    cursor: pointer;
    	}
    	.current_tab{
		    background: #292929;
		    color: white;
    	}
    	.footer{
    		position: fixed;
		    bottom: 0px;
		    width: 100%;
		    clear: both;
    	}
    	.row{
    		margin-right: -15px;
    		margin-left: -15px;
    	}
    	.form-right-block{
    		margin-left:50px;
    	}
    	.custom_radio{
    		float: left;
		    border: 1px solid #292929;
		    padding: 3px 18%;
		    cursor: pointer;
    	}
    	.current_custom_radio{
    		background: #292929;
    		color:white;
    	}
    	#redeem_points{
    		margin-top: 26px;
    		width: 170px;
    	}
    	.custom_buttons_margin{
    		margin-left: 35px;
    	}
    	#add_transaction_button{
    		width:100%;
    	}
    	#redeem_points_container{
    		width:auto;
    		left:5%;
    		top:10%;
    		background: white;
    		position: fixed;
    		z-index:10000;
    		padding:20px;
    		display: none;
    	}
    	#redeem_points_container_background{
    		position: fixed;
    		top:0px;
    		left:0px;
    		width: 100%;
    		height: 100%;
    		background: black;
    		opacity: .5;
    		z-index: 1000;
    		display: none;
    	}
    	.col-md-12 h1{
    		margin-bottom: 0px;
    	}
    	#loading{
    		position: fixed;
    		top:0px;
    		left:0px;
    		width: 100%;
    		height: 100%;
    		background: black;
    		opacity: .5;
    		z-index: 200000;
    		display: none;
    	}
    </style>
  </head>

<body>

<nav class="navbar navbar-inverse" role="navigation">

	<div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <i class="icon-cog"></i>
    </button>
    <a class="navbar-brand" href="search.php" style="padding: 0px;"><!--<img src="img/logo.jpg" style="width:90px;"> --></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav navbar-right">
    	<li>
    		<a href="profile.php">Home</a>
		</li>
		<li>
    		<a href="logout.php">Logout</a>
    	</li>
    </ul>
    
    <form class="navbar-form navbar-right" role="search">
      <div class="form-group">
        
      </div>
    </form>

  </div><!-- /.navbar-collapse -->
</div> <!-- /.container -->
</nav>

<br>
    
<div class="main">
    <div class="container">

      <div class="row pills_container">
      	  <div class="col-md-12">
      	  	 <div class="col-lg-2 pill current_tab" id="basic_information">New Shipping</div>
      	  	 <div class="col-lg-2 pill" id="get_transactions">Shipping History</div>
      	  </div>
      </div>

      <div class="row custom_container" id="basic_information_container">
      	<div class="col-md-12">

      		<div class="widget stacked">

      			<div class="widget-header">
					<i class="icon-tasks"></i>
					<h3>New Shipping Details</h3>
				</div> <!-- /.widget-header -->


				<div class="widget-content">

					<form action="add_transaction.php" class="form-horizontal col-md-12" method="POST">
						<div class="row">
							<div class="col-md-12">
								<h4><u>Item Details</u></h4>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Item Type</label>
											<select class="form-control" id="item_type">
												<option value="">Select Item Type</option>
												<?php 
													$itemTypes = mysql_query("SELECT * FROM costings_tbl");
													while($itemType = mysql_fetch_assoc($itemTypes)){
												?>
												<option value="<?php echo $itemType["itemType"]?>" data-perkgcost="<?php echo $itemType["perKgCost"]?>" data-perkmcost="<?php echo $itemType["perKmCost"]?>" data-insuranceCost="<?php echo $itemType["insuranceCost"]?>" data-normalDeliveryCost="<?php echo $itemType["normalDeliveryCost"]?>" data-doorPickupCost="<?php echo $itemType["doorPickupCost"]?>" data-expressDeliveryCost="<?php echo $itemType["expressDeliveryCost"]?>"><?php echo $itemType["itemType"]?></option>
												<?php
													}
												?>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Item Name</label>
											<input type="text" id="item_name" value="" class="form-control" placeholder="Please Enter Item Value">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Item Weight</label>
											<input type="number" id="item_weight" value="" class="form-control" placeholder="Please enter value in KG">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Need to be Insuranced ?</label>
											<select class="form-control" id="item_insurance">
													<option value="No">No</option>
													<option value="Yes">Yes</option>
											</select>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Delivery Speed</label>
											<select class="form-control" id="item_delivery_speed">
													<option value="">Please Select Delivery Speed</option>
													<option value="Normal">Normal</option>
													<option value="Express">Express</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Pickup Type</label>
											<select class="form-control" id="item_pickup_type">
													<option value="">Please Select Pickup Type</option>
													<option value="nearest_hub">Customer submits to nearest hub</option>
													<option value="home_pickup">Home Pickup</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
						<hr>

						<h4><u>Shipping From Address</u></h4>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>From City</label>
									<select class="form-control" id="fromCity">
										<option value="">Select City</option>
										<?php 
											$cities = mysql_query("SELECT * FROM cities_tbl");
											while($city = mysql_fetch_assoc($cities)){
										?>
										<option value="<?php echo $city["cityName"]?>" data-latitude="<?php echo $city["latitude"]?>" data-longitude="<?php echo $city["longitude"]?>"><?php echo $city["cityName"]?></option>
										<?php
											}
										?>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Customer Name</label>
									<input type="text" id="from_customer_name" value="" class="form-control" placeholder="Please Enter Customer Name">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Customer Mobile Number</label>
									<input type="number" id="from_customer_mobile" value="" class="form-control" placeholder="Please Enter Customer Mobile Number">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Street Address</label>
									<input type="text" id="from_customer_address" value="" class="form-control" placeholder="Please Enter Street Address">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Pincode</label>
									<input type="number" id="from_customer_pincode" value="" class="form-control" placeholder="Please Enter Pincode">
								</div>
							</div>
						</div>

						<hr>

						<h4><u>Shipping To Address</u></h4>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>To City</label>
									<select class="form-control" id="toCity">
										<option value="">Select City</option>
										<?php 
											$cities = mysql_query("SELECT * FROM cities_tbl");
											while($city = mysql_fetch_assoc($cities)){
										?>
										<option value="<?php echo $city["cityName"]?>" data-latitude="<?php echo $city["latitude"]?>" data-longitude="<?php echo $city["longitude"]?>"><?php echo $city["cityName"]?></option>
										<?php
											}
										?>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Customer Name</label>
									<input type="text" id="to_customer_name" value="" class="form-control" placeholder="Please Enter Customer Name">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Customer Mobile Number</label>
									<input type="number" id="to_customer_mobile" value="" class="form-control" placeholder="Please Enter Customer Mobile Number">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Street Address</label>
									<input type="text" id="to_customer_address" value="" class="form-control" placeholder="Please Enter Street Address">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Pincode</label>
									<input type="number" id="to_customer_pincode" value="" class="form-control" placeholder="Please Enter Pincode">
								</div>
							</div>
						</div>

						<hr>
						
						<div class="row">
							<div class="col-md-6">
								<button class="btn btn-default" type="button" id="proceed_to_booking" data-toggle="modal" data-target="#myModal">Proceed Shipment</button>
							</div>
						</div>
					</form>

				</div> <!-- /.widget-content -->


      		</div> <!-- /.widget -->

      	</div>

      </div> <!-- /.row -->

      <div class="row custom_container" id="transactions_container">

      	<div class="col-md-12" id="transactions_content"></div>

      </div>

    </div> <!-- /container -->


    <!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Shipment Confirmation</h4>
	      </div>
	      <div class="modal-body">
	        <div class="col-md-12">
				<h4><u>Item Details</u></h4>
				<div class="row">
					<div class="col-md-6">
						<b>Item Type</b> : <span id="item_type_html"></span>
					</div>
					<div class="col-md-6">
						<b>Item Name</b> : <span id="item_name_html"></span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<b>Item Weight</b> : <span id="item_weight_html"></span>
					</div>
					<div class="col-md-6">
						<b>Item Isuranced</b> : <span id="item_insurance_html"></span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<b>Delivery Speed</b> : <span id="item_delivery_speed_html"></span>
					</div>
					<div class="col-md-6">
						<b>Pickup Type</b> : <span id="item_pickup_type_html"></span>
					</div>
				</div>
				<br>
				<h4><u>Address Details</u></h4>
				<div class="row">
					<div class="col-md-6">
						<b>From Address</b> : <br> <span id="from_address_html"></span>
					</div>
					<div class="col-md-6">
						<b>To Address</b> :  <br> <span id="to_address_html"></span>
					</div>
				</div>
				<br>
				<h4><u>Total Distance </u> : <span id="item_total_distance_html"></span> KM</h4>
				<br>
				<h4><u>Shipping Cost Breakup</u></h4>
				<div class="row">
					<div class="col-md-6">
						<b>Cost For Item Weight</b> : Rs. <span id="item_weight_cost_html"></span>
					</div>
					<div class="col-md-6">
						<b>Cost For Distance</b> : Rs. <span id="item_distance_cost_html"></span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<b>Isurance Cost</b> :  Rs. <span id="item_insurance_cost_html"></span>
					</div>
					<div class="col-md-6">
						<b>Delivery Cost</b> :  Rs. <span id="item_delivery_cost_html"></span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<b>Pickup Cost</b> :  Rs. <span id="item_pickup_cost_html"></span>
					</div>
					<div class="col-md-6">
						<b>Total Shipment Cost</b> : Rs. <span id="total_shipment_cost_html"></span>
					</div>
				</div>
				<br>
				<h4><u>Payment Details</u></h4>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label>Payment Mode</label>
							<select class="form-control" id="paymentmode">
							<?php<option value="">Select Payment Method</option> ?>
								<option value="Cash">Cash</option> 
								<option value="Online">Online Payment</option>
								<option value="Wallets">Online Wallets</option>
							</select>
						</div>
					</div>
				</div>
			</div>
	      </div>
	      <div class="modal-footer">
	      	<button class="btn btn-default" type="button" id="confirm_booking">Confirm Shipping</button>
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>

	  </div>
	</div>
</div> <!-- /main -->


    
    
<div class="footer">
		
	<div class="container">
		
		<div class="row">
			
			<div id="footer-copyright" class="col-md-6">
				&copy; 2019-20 Mounika
			</div> <!-- /span6 -->

		</div> <!-- /row -->
		
	</div> <!-- /container -->
	
</div> <!-- /footer -->

<!-- Hidden Value-->
<input type="text" id="customerEmail" style="display:none;" value="<?php echo $_SESSION["userEmail"];?>">
    

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/libs/jquery-1.9.1.min.js"></script>
<script src="js/libs/jquery-ui-1.10.0.custom.min.js"></script>
<script src="js/libs/bootstrap.min.js"></script>

<script src="js/plugins/validate/jquery.validate.js"></script>

<script src="js/Application.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		
		$("#get_transactions").click(function(){
				 $("#loading").show();
				 $.ajax({
					type:"POST",
					url:"get_bookings.php",
					data:{customerEmail:$("#customerEmail").val()},
					cache:false,
					success:function(result){
						$("#transactions_content").html(result);
						$("#loading").hide();
					},
					error:function(){
						$("#loading").hide();
					}
				});

			$(".pill").removeClass("current_tab");
			$("#get_transactions").addClass("current_tab");
			$(".custom_container").hide();
			$("#transactions_container").show();
		});

		$("#basic_information").click(function(){
			$(".pill").removeClass("current_tab");
			$("#basic_information").addClass("current_tab");
			$(".custom_container").hide();
			$("#basic_information_container").show();
		});

		function calcCrow(lat1, lon1, lat2, lon2) 
		{
		var R = 6371; // km
		var dLat = toRad(lat2-lat1);
		var dLon = toRad(lon2-lon1);
		var lat1 = toRad(lat1);
		var lat2 = toRad(lat2);

		var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
			Math.sin(dLon/2) * Math.sin(dLon/2) * Math.cos(lat1) * Math.cos(lat2); 
		var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
		var d = R * c;
		return d;
		}

		// Converts numeric degrees to radians
		function toRad(Value) 
		{
			return Value * Math.PI / 180;
		}

		//Booking related functions
		$("#proceed_to_booking").click(function(){
			var item_type = $("#item_type").val();
			var perkgcost = $("#item_type").find(':selected').attr('data-perkgcost');
			var perkmcost = $("#item_type").find(':selected').attr('data-perkmcost');
			var insuranceCost = $("#item_type").find(':selected').attr('data-insuranceCost');
			var normalDeliveryCost = $("#item_type").find(':selected').attr('data-normalDeliveryCost');
			var doorPickupCost = $("#item_type").find(':selected').attr('data-doorPickupCost');
			var expressDeliveryCost = $("#item_type").find(':selected').attr('data-expressDeliveryCost');
			var item_name = $("#item_name").val();
			var item_weight = $("#item_weight").val();
			var isInsuranced = $("#item_insurance").val();
			var deliverySpeed = $("#item_delivery_speed").val();
			var pickupType = $("#item_pickup_type").val();

			var fromCity = $("#fromCity").val();
			var fromCityLat = $("#fromCity").find(':selected').attr('data-latitude');
			var fromCityLong = $("#fromCity").find(':selected').attr('data-longitude');
			var fromCustomerName = $("#from_customer_name").val();
			var fromCustomerNumber = $("#from_customer_mobile").val();
			var fromCustomerAddress = $("#from_customer_address").val();
			var fromCustomerPincode = $("#from_customer_pincode").val();

			var toCity = $("#toCity").val();
			var toCityLat = $("#toCity").find(':selected').attr('data-latitude');
			var toCityLong = $("#toCity").find(':selected').attr('data-longitude');
			var toCustomerName = $("#to_customer_name").val();
			var toCustomerNumber = $("#to_customer_mobile").val();
			var toCustomerAddress = $("#to_customer_address").val();
			var toCustomerPincode = $("#to_customer_pincode").val();

			var totalDistance = calcCrow(fromCityLat,fromCityLong,toCityLat,toCityLong).toFixed(1);
			var totalDistanceCharges = (parseInt(totalDistance, 10)*parseInt(perkmcost, 10));
			
			var totalWeightCost = (parseInt(item_weight, 10)*parseInt(perkgcost, 10));

			if(isInsuranced == "No"){
				var totalIsuranceCost = 0;
			}else{
				var totalIsuranceCost = insuranceCost;
			}

			if(deliverySpeed == "Normal"){
				var totalDeliveryCost = normalDeliveryCost;
			}else{
				var totalDeliveryCost = expressDeliveryCost;
			}

			if(pickupType == "nearest_hub"){
				var totalPickupCost = 0;
			}else{
				var totalPickupCost = doorPickupCost;
			}

			var totalShipmentCharges = (parseInt(totalDistanceCharges, 10) + parseInt(totalWeightCost, 10) + parseInt(totalIsuranceCost, 10) + parseInt(normalDeliveryCost, 10) + parseInt(totalPickupCost, 10));

			$("#item_type_html").html(item_type);
			$("#item_name_html").html(item_name);
			$("#item_weight_html").html(item_weight);
			$("#item_insurance_html").html(isInsuranced);
			$("#item_delivery_speed_html").html(deliverySpeed);
			$("#item_pickup_type_html").html(pickupType);

			$("#from_address_html").html(fromCustomerName+", "+fromCustomerNumber+",<br>"+fromCustomerAddress+",<br>"+fromCity+", "+fromCustomerPincode);
			$("#to_address_html").html(fromCustomerName+", "+toCustomerNumber+",<br>"+toCustomerAddress+",<br>"+toCity+", "+toCustomerPincode);

			$("#item_total_distance_html").html(totalDistance);

			$("#item_weight_cost_html").html(totalWeightCost);
			$("#item_distance_cost_html").html(totalDistanceCharges);
			$("#item_insurance_cost_html").html(totalIsuranceCost);
			$("#item_delivery_cost_html").html(totalDeliveryCost);
			$("#item_pickup_cost_html").html(totalPickupCost);
			$("#total_shipment_cost_html").html(totalShipmentCharges);
		});

		$("#confirm_booking").click(function(){
			var item_type = $("#item_type").val();
			var perkgcost = $("#item_type").find(':selected').attr('data-perkgcost');
			var perkmcost = $("#item_type").find(':selected').attr('data-perkmcost');
			var insuranceCost = $("#item_type").find(':selected').attr('data-insuranceCost');
			var normalDeliveryCost = $("#item_type").find(':selected').attr('data-normalDeliveryCost');
			var doorPickupCost = $("#item_type").find(':selected').attr('data-doorPickupCost');
			var expressDeliveryCost = $("#item_type").find(':selected').attr('data-expressDeliveryCost');
			var item_name = $("#item_name").val();
			var item_weight = $("#item_weight").val();
			var isInsuranced = $("#item_insurance").val();
			var deliverySpeed = $("#item_delivery_speed").val();
			var pickupType = $("#item_pickup_type").val();

			var fromCity = $("#fromCity").val();
			var fromCityLat = $("#fromCity").find(':selected').attr('data-latitude');
			var fromCityLong = $("#fromCity").find(':selected').attr('data-longitude');
			var fromCustomerName = $("#from_customer_name").val();
			var fromCustomerNumber = $("#from_customer_mobile").val();
			var fromCustomerAddress = $("#from_customer_address").val();
			var fromCustomerPincode = $("#from_customer_pincode").val();

			var toCity = $("#toCity").val();
			var toCityLat = $("#toCity").find(':selected').attr('data-latitude');
			var toCityLong = $("#toCity").find(':selected').attr('data-longitude');
			var toCustomerName = $("#to_customer_name").val();
			var toCustomerNumber = $("#to_customer_mobile").val();
			var toCustomerAddress = $("#to_customer_address").val();
			var toCustomerPincode = $("#to_customer_pincode").val();

			var totalDistance = calcCrow(fromCityLat,fromCityLong,toCityLat,toCityLong).toFixed(1);
			var totalDistanceCharges = (parseInt(totalDistance, 10)*parseInt(perkmcost, 10));
			var totalWeightCost = (parseInt(item_weight, 10)*parseInt(perkgcost, 10));

			if(isInsuranced == "No"){
				var totalIsuranceCost = 0;
			}else{
				var totalIsuranceCost = insuranceCost;
			}

			if(deliverySpeed == "Normal"){
				var totalDeliveryCost = normalDeliveryCost;
			}else{
				var totalDeliveryCost = expressDeliveryCost;
			}

			if(pickupType == "nearest_hub"){
				var totalPickupCost = 0;
			}else{
				var totalPickupCost = doorPickupCost;
			}

			var totalShipmentCharges = (parseInt(totalDistanceCharges, 10) + parseInt(totalWeightCost, 10) + parseInt(totalIsuranceCost, 10) + parseInt(normalDeliveryCost, 10) + parseInt(totalPickupCost, 10));
			
			$("#loading").show();
			$.ajax({
				type:"POST",
				url:"add_booking.php",
				data:{customerEmail:$("#customerEmail").val(),itemType:item_type,itemName:item_name,itemWeight:item_weight,insurance:isInsuranced,deliverySpeed:deliverySpeed,pickupType:pickupType,totalKmToBeShipped:totalDistance,totalWeightCharges:totalWeightCost,totalKmCharges:totalDistanceCharges,totalInsuranceCost:totalIsuranceCost,totalDeliveryCost:totalDeliveryCost,totalPickupCost:totalPickupCost,totalShippingCharges:totalShipmentCharges,fromName:fromCustomerName,fromMobileNumber:fromCustomerNumber,fromCity:fromCity,fromAddress:fromCustomerAddress,fromPinCode:fromCustomerPincode,toName:toCustomerName,toMobileNumber:toCustomerNumber,toCity:toCity,toAddress:toCustomerAddress,toPincode:toCustomerPincode,paymentMode:$("#paymentmode").val()},
				cache:false,
				success:function(result){
					alert(result);
					$("#loading").hide();
					location.reload();
				},
				error:function(){
					$("#loading").hide();
				}
			});
		});
	});
</script>

	<div id="ajax_result" style="display:none;">
		
	</div>
	<div id="loading">
		
	</div>
  </body>
</html>
