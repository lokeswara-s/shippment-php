<?php 
session_start();
include("db.php");
$bookingDetails = mysql_fetch_assoc(mysql_query("SELECT * FROM bookings WHERE bookingId='".$_POST["bookingId"]."'"));
$status = array(
    "1" => "Item At Hub",
    "2" => "Ready to Dispatch",
    "3" => "In Transist",
    "4" => "Delivered"
);
?>

<div class="col-md-12">

    <div class="widget stacked">

        <div class="widget-header">
            <i class="icon-tasks"></i>
            <h3>Booking Details for Tracking Id : <?php echo $_POST["bookingId"];?></h3>
        </div> <!-- /.widget-header -->


        <div class="widget-content">
	        <div class="col-md-12">
				<h4><u>Item Details</u></h4>
				<div class="row">
					<div class="col-md-6">
						<b>Item Type</b> : <span id="item_type_html"><?php echo $bookingDetails["itemType"];?></span>
					</div>
					<div class="col-md-6">
						<b>Item Name</b> : <span id="item_name_html"><?php echo $bookingDetails["itemName"];?></span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<b>Item Weight</b> : <span id="item_weight_html"><?php echo $bookingDetails["itemWeight"];?></span>
					</div>
					<div class="col-md-6">
						<b>Item Isuranced</b> : <span id="item_insurance_html"><?php echo $bookingDetails["insurance"];?></span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<b>Delivery Speed</b> : <span id="item_delivery_speed_html"><?php echo $bookingDetails["deliverySpeed"];?></span>
					</div>
					<div class="col-md-6">
						<b>Pickup Type</b> : <span id="item_picup_type_html"><?php echo $bookingDetails["pickupType"];?></span>
					</div>
				</div>
				<br>
				<h4><u>Address Details</u></h4>
				<div class="row">
					<div class="col-md-6">
						<b>From Address</b> : <br> <span id="from_address_html"><?php echo $bookingDetails["fromName"].", ".$bookingDetails["fromMobileNumber"].", <br>".$bookingDetails["fromAddress"].", <br>".$bookingDetails["fromCity"].", ".$bookingDetails["fromPinCode"]?></span>
					</div>
					<div class="col-md-6">
						<b>To Address</b> :  <br> <span id="to_address_html"><?php echo $bookingDetails["toName"].", ".$bookingDetails["toMobileNumber"].", <br>".$bookingDetails["toAddress"].", <br>".$bookingDetails["toCity"].", ".$bookingDetails["toPincode"]?></span>
					</div>
				</div>
				<br>
				<h4><u>Total Distance </u> : <span id="item_total_distance_html"><?php echo $bookingDetails["totalKmToBeShipped"];?></span> KM</h4>
				<br>
				<h4><u>Shipping Cost Breakup</u></h4>
				<div class="row">
					<div class="col-md-6">
						<b>Cost For Item Weight</b> : Rs. <span id="item_weight_cost_html"><?php echo $bookingDetails["totalWeightCharges"];?></span>
					</div>
					<div class="col-md-6">
						<b>Cost For Distance</b> : Rs. <span id="item_distance_cost_html"><?php echo $bookingDetails["totalKmCharges"];?></span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<b>Isurance Cost</b> :  Rs. <span id="item_insurance_cost_html"><?php echo $bookingDetails["totalInsuranceCost"];?></span>
					</div>
					<div class="col-md-6">
						<b>Delivery Cost</b> :  Rs. <span id="item_delivery_cost_html"><?php echo $bookingDetails["totalDeliveryCost"];?></span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<b>Pickup Cost</b> :  Rs. <span id="item_pickup_cost_html"><?php echo $bookingDetails["totalPickupCost"];?></span>
					</div>
					<div class="col-md-6">
						<b>Total Shipment Cost</b> : Rs. <span id="total_shipment_cost_html"><?php echo $bookingDetails["totalShippingCharges"];?></span>
					</div>
				</div>
                <br>
                <h4><u>Current Status </u> : <span id="item_total_distance_html"><?php echo $status[$bookingDetails["status"]];?></span></h4>
                <br>
				<h4><u>Update Shipping Details</u></h4>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Status</label>
							<select class="form-control" id="statusChange">
								<option value="">Select status</option>
								<option value="1">Item At Hub</option>
								<option value="2">Ready to Dispatch</option>
                                <option value="3">In Transist</option>
                                <option value="4">Delivered</option>
							</select>
						</div>
                    </div>
                    <div class="col-md-6">
						<div class="form-group">
							<label>Expected Arrival Date</label>
							<input type="text" class="form-control" id="expectedDate" placeholder="YYYY-MM-DD">
						</div>
					</div>
				</div>
				<div class="row">
                    <div class="col-md-12">
						<div class="form-group">
							<label>Notes to customer</label>
							<textarea class="form-control" id="notes" placeholder="Ex: You package arrived at your nearest hub XYZ"></textarea>
						</div>
					</div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <button class="btn btn-default" type="button" id="updateDetails">Update</button>
					</div>
				</div>
			</div>
        </div> <!-- /.widget-content -->


    </div> <!-- /.widget -->

    </div>