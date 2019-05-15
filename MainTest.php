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
	<h1> Main Test </h1> </br>
	
		<form action="MainTestResults.php" method="POST">
			<p> Question 1 :  </br>
			<input type="text" placeholder="Answer" name="userAnswer1">
			</p>
			<p> Question 2 :  </br>
			<input type="text" placeholder="Answer" name="userAnswer2">
			</p>
			<p> Question 3 :  </br>
			<input type="text" placeholder="Answer" name="userAnswer3">
			</p>
			<p> Question 4 :  </br>
			<input type="text" placeholder="Answer" name="userAnswer4">
			</p>
			<p> Question 5 :  </br>
			<input type="text" placeholder="Answer" name="userAnswer5">
			</p>
			<button type="submit" name="submit" value="show me">Submit</button>
		</form></br>
		<a href="AccountManagementUser.php">Back</a>
	</div>
</body>
</html>

