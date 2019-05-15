<?php
include 'config.php';
include "session.php";

$currentScore = 0;
$userAnswer1 = $_POST['userAnswer1'];
$userAnswer2 = $_POST['userAnswer2'];
$userAnswer3 = $_POST['userAnswer3'];
$userAnswer4 = $_POST['userAnswer4'];
$userAnswer5 = $_POST['userAnswer5'];


    $sql = "SELECT * FROM testversion WHERE testVersionID = '1' "; 
    $result = mysqli_query($link, $sql);
	$data = mysqli_fetch_array($result);
	

	if ($userAnswer1 === $data['testAnswer1']){
		$currentScore = $currentScore + 1;
	} 
	if ($userAnswer2 === $data['testAnswer2']){
		$currentScore = $currentScore + 1;
	} 
	if ($userAnswer3 === $data['testAnswer3']){
		$currentScore = $currentScore + 1;
	} 
	if ($userAnswer4 === $data['testAnswer4']){
		$currentScore = $currentScore + 1;
	} 
	if ($userAnswer5 === $data['testAnswer5']){
		$currentScore = $currentScore + 1;
	}
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

	<?php
	if ($currentScore >= 3){
		?> <h1> You have passed! </h1>
		<a href="AccountManagementUser.php">Back</a>
		<?php
	}else if ($currentScore < 3){
		?> <h1> You have failed the test </h1>
		<a href="AccountManagementUser.php">Back</a>
		<?php
	}
	?>
</body>
</html>