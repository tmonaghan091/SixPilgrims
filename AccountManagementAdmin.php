<?php
include "config.php";
include "session.php";
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="styles.css"/>
</head>
<body>
<div class="Nav">
	<ul>
		<li><a href="logout.php">Logout</a></li>
	</ul>
</div>
	<div class="MainText">
	
		<h2> Welcome to the Admin Dash Board </h2><br>
		<h4> Please click on the table you would like to look at. </h4><br>
		<a href="TestVersion.php">Test Version</a>
		<a href="UserAccounts.php">User Account</a>
		<a href="UserResults.php">User Results</a>
	</div>
</body>
</html>
