<?php
session_start();
include("administrator/db.php");
$bookingDate = date("Y-m-d H:i:s");
$bookingId = "GSMS".date("YmdHis");
$userDetails = mysql_fetch_assoc(mysql_query("SELECT id FROM users_tbl WHERE email='".$_POST["customerEmail"]."'"));
mysql_query("INSERT INTO `bookings` (`bookingId`, `userId`, `itemType`, `itemName`, `itemWeight`, `insurance`, `deliverySpeed`, `pickupType`, `totalKmToBeShipped`, `totalWeightCharges`, `totalKmCharges`, `totalInsuranceCost`, `totalDeliveryCost`, `totalPickupCost`, `totalShippingCharges`, `fromName`, `fromMobileNumber`, `fromCity`, `fromAddress`, `fromPinCode`, `toName`, `toMobileNumber`, `toCity`, `toAddress`, `toPincode`, `paymentMode`, `bookingDate`, `status`) VALUES ('".$bookingId."', '".$userDetails["id"]."', '".$_POST["itemType"]."', '".$_POST["itemName"]."', '".$_POST["itemWeight"]."', '".$_POST["insurance"]."', '".$_POST["deliverySpeed"]."', '".$_POST["pickupType"]."', '".$_POST["totalKmToBeShipped"]."', '".$_POST["totalWeightCharges"]."', '".$_POST["totalKmCharges"]."', '".$_POST["totalInsuranceCost"]."', '".$_POST["totalDeliveryCost"]."', '".$_POST["totalPickupCost"]."', '".$_POST["totalShippingCharges"]."', '".$_POST["fromName"]."', '".$_POST["fromMobileNumber"]."', '".$_POST["fromCity"]."', '".$_POST["fromAddress"]."', '".$_POST["fromPinCode"]."', '".$_POST["toName"]."', '".$_POST["toMobileNumber"]."', '".$_POST["toCity"]."', '".$_POST["toAddress"]."', '".$_POST["toPincode"]."', '".$_POST["paymentMode"]."', '".$bookingDate."', '1')");
echo "Order Placed Successfully. Your Tracking Id is : ".$bookingId;
?>