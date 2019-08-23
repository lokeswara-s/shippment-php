<?php
session_start();
include("./administrator/db.php");
error_reporting(0);

$password = md5($_POST['adminPassword']);
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['adminEmail'];

mysql_query("INSERT INTO `users_tbl` (`userType`, `name`, `mobileNumber`, `email`, `password`) VALUES (1, '".$name."', '".$phone."', '".$email."', '".$password."')");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title></title>
    <script src="js/libs/jquery-1.9.1.min.js"></script>
<script src="js/libs/jquery-ui-1.10.0.custom.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            if (confirm("User Registered Successfully!")) {
                window.location.href ="index.html"
            } else {
                alert("Error while creating user")
                window.location.href ="index.html"
            }
        });
</script>
</head>
<body>

</body>
</html>