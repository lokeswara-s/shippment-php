<?php 
	if(!mysql_connect("localhost","root","")){
		echo "not";
        }
	mysql_select_db("shipping_db") or die(mysql_error());
?>
