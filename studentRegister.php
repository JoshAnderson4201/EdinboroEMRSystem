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
<h2> Student Register </h2>

<form id="register" method="post" action="<?php echo $PHP_SELF;?>">
<fieldset id="Contact">
<legend> <b> Enter Personal Information </b></legend>
Student ID &nbsp;&nbsp;&nbsp;
	<input type="text" id="studentID" name="studentID"> <br>
First Name: &nbsp;
	<input type="text" id="firstName" name="firstName"> <br>
Last Name: &nbsp;&thinsp;
	<input type="text" id="lastName" name="lastName"> <br>
E-mail &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&thinsp;  
	<input type="text" id="email" name="email"> <br>
Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" id="password" name="password"> <br>
Student<input type="checkbox" id="studentBox" name="studentBox" value="value" checked> <br>
<br><br>
<input type="submit">
</fieldset>
</form>

<?php
if(isset($_POST["studentBox"]) && !empty($_POST["studentBox"]))
{$is_student =1;}
else
{$is_student =0;}

$sql = "INSERT INTO student (id, fname, lname, email, password, studentBox) VALUES
('".$_POST['id'].
"','".
$_POST['firstName'].
"','".
$_POST['lastName'].
"','".
$_POST['email'].
"','".
$_POST['password'].
"','".
$is_student.
"')";

echo($sql);

mysqli_query($db_Connection , $sql) or die ("Insert did not work");

mysqli_close($db_Connection);
?>
</div> 
<!-- wrapper -->
</body>