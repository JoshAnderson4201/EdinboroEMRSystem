<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Group 2 Nursing Project </title>
<link href="emr.css" rel="stylesheet" type="text/css">
<link rel='shortcut icon' href='icon.ico' type='image/x-icon'/ >
</head>

<body>
<div id="wrapper"> 

<?php include "Menu.php"?>
<div id="main"> 
	<div class="enter" id="student">
    	<p class="Lt_Grey_Title" ><h3> Student Sign In </h3></p>

		<a  href='login1.php'><p class="box_for_text">Sign IN</p></a>
		<a href='studentRegister.php'><p class="box_for_text">Register</p></a>
  	</div><!--close student -->

    <div class="enter" id="instructor">
    	<p class="Lt_Grey_Title" ><h3> Professor Sign In </h3></p>
		<a  href='login.php'><p class="box_for_text">Sign IN</p></a>
        <a href='instructorRegister.php'><p class="box_for_text">Register</p></a>
	</div><!--close instructor -->
  
</div> <!--main-->

<footer>
<p>Terms of Use | Privacy Policy | &copy; Group2 2016</p>
</footer>
</div> 	 <!--close wrapper -->
</body>
</html>