<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Group 2</title>
<link href="emr.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php include "DBConnect.php";?>
<div id="wrapper">
<h2> Instructor Registration </h2>

<form id="register" method="post" action="<?php echo $PHP_SELF;?>">
<fieldset id="Contact">
<legend> <b> Enter Personal Information </b></legend>
Instructor ID &nbsp;&nbsp;&nbsp;
	<input type="text" id="instructorID" name="instructorID"> <br>
First Name: &nbsp;
	<input type="text" id="firstName" name="firstName"> <br>
Last Name: &nbsp;&thinsp;
	<input type="text" id="lastName" name="lastName"> <br>
E-mail &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&thinsp;  
	<input type="text" id="email" name="email"> <br>
Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" id="password" name="password"> <br>
Instructor<input type="checkbox" id="lastName" name="adminstrator" value="value" checked> <br>

<br><br>
<input type="submit">
</fieldset>
</form>

<?php
if(isset($_POST["adminstrator"]) && !empty($_POST["adminstrator"]))
{$is_admin =1;}
else
{$is_admin =0;}

$sql = "INSERT INTO instructor (id, fname, lname, email, password, admin) VALUES
('".$_POST['instructorID'].
"','".
$_POST['firstName'].
"','".
$_POST['lastName'].
"','".
$_POST['email'].
"','".
$_POST['password'].
"','".
$is_admin.
"')";

echo($sql);

mysqli_query($db_Connection, $sql) or die ("Insert did not work");

mysqli_close($db_Connection);
?>
</div> 
<!-- wrapper -->
</body>