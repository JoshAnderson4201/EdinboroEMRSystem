<?php session_start();?>
<?php include "DBConnect.php";?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Group 2 Nursing Project </title>
<link href="emr.css" rel="stylesheet" type="text/css">
</head>

<body>

<!--<nav>
	<ul>
      <li><a href="index.php">Home</a></li>
      <li class="dropdown">
        <a href="#" class="dropbtn">lecture</a>
        <div class="dropdown-content">
          <a href="#">text</a>
          <a href="#">video</a>
        </div>
       </li>
      <li class="dropdown">
        <a href="#" class="dropbtn">class</a>
        <div class="dropdown-content">
          <a href="#">nursing101</a>
          <a href="#">nursing102</a>
          <a href="#">nursing103</a>
        </div>
      </li>
      <li class="dropdown">
        <a href="#" class="dropbtn">assignment</a>
        <div class="dropdown-content">
          <a href="#">assignment 1</a>
          <a href="#">assignment 2</a>
          <a href="#">assignment 3</a>
        </div>
      </li>

    </ul>

</nav>-->

<?php
if (isset($_SESSION["fname"]))
{
	$error = " you are already logged in";
}

elseif (isset($_POST['email']))
{
	$sql = "SELECT * FROM user WHERE email = '".$_POST['email']."'";
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
			$_SESSION["studentBox"] = $row['student'];	
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

<body>

<div id="wrapper">
<?php include "menu.php"; ?>

<h2> Student Login </h2>

<form name="addCustomer" method="post" action="login.php">

<fieldset id="Contact">
Enter You Information<br>
Email: <input type="text" id="email" name="email"> <br>
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





