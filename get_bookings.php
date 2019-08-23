<?php 
session_start();
include("administrator/db.php");
error_reporting(0);
$userDetails = mysql_fetch_assoc(mysql_query("SELECT id FROM users_tbl WHERE email='".$_POST["customerEmail"]."'"));
$bookings=mysql_query("SELECT * FROM bookings WHERE userId='".$userDetails["id"]."'");
$status = array(
    "1" => "Item At Hub",
    "2" => "Ready to Dispatch",
    "3" => "In Transist",
    "4" => "Delivered"
);
?>
<div>
     <div class="fields" style="margin-bottom:1%;">
     <div>
         <table class="table table-striped table-bordered exampletable" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th style="padding-left:10px !important;">Booking Id </th>
                    <th style="padding-left:10px !important;">Type</th>
                    <th style="padding-left:10px !important;">Item Details</th>
                    <th style="padding-left:10px !important;">From Address</th>
                    <th style="padding-left:10px !important;">To Address</th>
                    <th style="padding-left:10px !important;">Shipping Charges</th>
                    <th style="padding-left:10px !important;">Expected Arrival</th>
                    <th style="padding-left:10px !important;">Status</th>
                    <th style="padding-left:10px !important;">Notes</th>
                </tr>
            </thead> 
            <tbody>           
                <?php 
                    while($booking = mysql_fetch_assoc($bookings)){
                ?>
                 <tr>
                    <td><?php echo $booking["bookingId"];?></td>
                    <td><?php echo $booking["itemType"];?></td>
                    <td>Name : <?php echo $booking["itemName"];?>, Weight : <?php echo $booking["itemWeight"];?> <br> Insurance : <?php echo $booking["insurance"];?>, Delivery Speed : <?php echo $booking["deliverySpeed"];?>, Pickup Type : <?php echo $booking["pickupType"];?></td>
                    <td><?php echo $booking["fromName"].", ".$booking["fromMobileNumber"].", <br>".$booking["fromAddress"].", <br>".$booking["fromCity"].", ".$booking["fromPinCode"]?></td>
                    <td><?php echo $booking["toName"].", ".$booking["toMobileNumber"].", <br>".$booking["toAddress"].", <br>".$booking["toCity"].", ".$booking["toPincode"]?></td>
                    <td>Rs. <?php echo $booking["totalShippingCharges"];?></td>
                    <td><?php if($booking["exceptedArrivalDate"] == "0000-00-00"){ echo "";}else{ echo $booking["exceptedArrivalDate"];}?></td>
                    <td><?php echo $status[$booking["status"]];?></td>
                    <td><?php echo $booking["notes"];?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
    </div>
</div>