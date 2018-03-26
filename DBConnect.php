<?php
$db_location = "localhost";
$db_username = "nursingbill";
$db_password = "nbconnectuserpass";
$db_database = "nursingbill";
$db_Connection = mysqli_connect("$db_location", "$db_username", "$db_password", "$db_database") or die("Error connecting to the database.");
?>

