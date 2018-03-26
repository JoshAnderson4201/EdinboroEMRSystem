<?php session_start();?>
<?php include "DBConnect.php";?>

<?php
if (isset($_SESSION["fname"]))
{
	$error = "<h3 align='center'> You are already logged in </h3>";
}

elseif (isset($_POST['email']))
{
	$sql = "SELECT * FROM customer WHERE email = '".$_POST['email']."'";
	$rowWithMatchingLogin = mysqli_query($db_Connection, $sql) or die (mysql_error());
	$numRecords = mysqli_num_rows($rowWithMatchingLogin);
	
	if ($numRecords == 1)
	{
		$row = mysqli_fetch_array($rowWithMatchingLogin);
		if ($_POST['password'] == $row['password'])
		{
			$_SESSION["fname"] = $row['fname'];			
			$_SESSION["lname"] = $row['lname'];
			$_SESSION["email"] = $row['email'];
			$_SESSION["password"] = $row['password'];
			$_SESSION["admin"] = $row['admin'];	
		}

		else
		{
			$error="password is incorrect";
		}
	}
	
	else
	{
		$error= "email is not found";
	}
}
mysqli_close($db_Connection);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Group 2 Nursing Project</title>

<link href="emr.css" rel="stylesheet" type="text/css">
</head>
<body>

<div id="wrapper">
<header> <img src="header1.jpg" width="900" alt="group2"> </header>

<h2 align="center"> Login </h2>

<form name="addCustomer" method="post" action="login.php">

<fieldset id="Contact">
Enter your information<br>
Email: &nbsp; &nbsp; &nbsp;<input type="text" id="email" name="email"> <br>
Password: <input type="text" id="password" name="password"> <br> <br>
<input type="submit" class="button_style" value="Login"> <br>
</fieldset>
</form>

<?php 
if (isset($error))
{
	echo $error;
}
elseif (isset($_SESSION["fname"]))
{
	echo "<table id='tableformat'>";
	echo "<tr>
	<th> Last Name </th>
	<th> First Name </th>
	<th> Email Address </th>
	</tr>";
	echo "<tr>";
	echo "<td align='center'>";
	echo $_SESSION["lname"];
	echo "</td>";
	echo "<td align='center'>";
	echo $_SESSION["fname"];
	echo "</td>";
	echo "<td align='center'>";
	echo $_SESSION["email"];
	echo "</td></th>";
	echo "</table>";
}
?>


<float: clear>
<footer>
<p>Terms of Use | Privacy Policy | &copy;Group2 Nursing Bill</p>
</footer>
</div>
</body>
</html>