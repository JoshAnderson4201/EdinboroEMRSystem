<header> <img src="header2.png" width="1078" alt="group2"> </header>

<nav>
	<ul class="topnav" id="TopNavBar">
    	
        <?php
		if ($_SESSION[$LoginType] == $StudentLoginType && $_SESSION["PasswordReset"] == false)
		{
			echo " <li><a href=\"StudentHome.php\">Student Home</a></li>";
			echo " <li><a href=\"Documents.php\">Documents</a></li>";
		}
		else if ($_SESSION[$LoginType] == $FacultyLoginType && $_SESSION["PasswordReset"] == false)
		{
			echo " <li><a href=\"FacultyHome.php\">Faculty Home</a></li>";
		}
		else
		{
			echo "<li><a href=\"index.php\">Home</a></li>";
		}
		?>
		
        <li class="dropdown">
        	<a href="About.php" class="dropbtn">About</a>
		</li>
    </ul>
</nav>