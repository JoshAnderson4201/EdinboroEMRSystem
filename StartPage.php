<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Group 2 Nursing Project </title>

<link href="Forms.css" rel="stylesheet" type="text/css">

<div id = "newPat">
	<form name="newPatient" id="newPatientForm">
    	<fieldset id="title">
        	<h1>Edinboro Nursing EMR</h1>
        </fieldset>
		<fieldset> 
        	<h3> New Patient? </h3>
            <label><input type="radio" id = "yes"> Yes </label>
            <label><input type="radio" id = "no" value = "No"> No </label>
            <br>
            <input type="reset">
            <input type="submit">
        </fieldset>
	</form> 
</div>

<div id = "ifYes">
</div>

<div id = "ifNo">
</div>


<?php session_start();?>
<?php include "DBConnect.php";?>






<footer>
<p>Terms of Use | Privacy Policy | &copy; Group2 2016</p>
</footer>
</div> <!--close wrapper -->
</body>
</html>

