<?php 
session_start();
    include("db.php");
    mysql_query("UPDATE `bookings` SET `status` = '".$_POST["status"]."', `exceptedArrivalDate` = '".$_POST["expectedDate"]."', `notes` = '".$_POST["notes"]."' WHERE `bookings`.`bookingId` = '".$_POST["bookingId"]."'");
?>