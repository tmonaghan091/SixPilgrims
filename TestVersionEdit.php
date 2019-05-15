<?php
include 'config.php';
include "session.php";

$id = $_REQUEST['ID'];

$query = "SELECT * FROM testversion WHERE testVersionID = '.$id.'";
$result = mysqli_query($link, $query) or die (mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="styles.css"/>
</head>
<div class="Nav">
	<ul>
		<li><a href="logout.php">Logout</a></li>
	</ul>
</div>
<body>
<div class="MainText">
	<h1> Update: <h1>

	<?php $status = "";
		if(isset($_POST['new']) && $_POST['new'] == 1){
			$id = $_REQUEST['id'];
			$testTitle = $_REQUEST['testTitle'];
			$testQuestion1 = $_REQUEST['testQuestion1'];
			$testQuestion2 = $_REQUEST['testQuestion2'];
			$testQuestion3 = $_REQUEST['testQuestion3'];
			$testQuestion4 = $_REQUEST['testQuestion4'];
			$testQuestion5 = $_REQUEST['testQuestion5'];
			$testAnswer1 = $_REQUEST['testAnswer1'];
			$testAnswer2 = $_REQUEST['testAnswer2'];
			$testAnswer3 = $_REQUEST['testAnswer3'];
			$testAnswer4 = $_REQUEST['testAnswer4'];
			$testAnswer5 = $_REQUEST['testAnswer5'];
			$passRate = $_REQUEST['passRate'];
			

			
			$update = "UPDATE testversion SET testTitle ='".$testTitle."', testQuestion1 = '".$testQuestion1."', testQuestion2 = '".$testQuestion2."', testQuestion3 = '".$testQuestion3."', testQuestion4 = '".$testQuestion4."'
			, testQuestion5 = '".$testQuestion5."', testAnswer1 = '".$testAnswer1."', testAnswer2 = '".$testAnswer2."', testAnswer3 = '".$testAnswer3."', testAnswer4 = '".$testAnswer4."', testAnswer5 = '".$testAnswer5."',
			passRate = '".$passRate."' ";
			mysqli_query($link, $update) or die(mysqli_error());
			
			echo 'Update Successful!!!!';
		} else {
			?>
			
		<form action="" method="POST">
			<input type="hidden" placeholder="" name="new" value="1"/>
			<input type="hidden" placeholder="" name="id" value="<?php echo['id'] ?>" />
			<p> Test Title:
				<input type="text" placeholder="" name="testTitle" required value="<?php echo ['testTitle'];?>" />
			</p>
			<p> Test Question 1:
				<input type="text" placeholder="Please enter the new test question." name="testQuestion1" required value="<?php echo ['testQuestion1'];?>" />
			</p>
			<p> Test Question 2:
				<input type="text" placeholder="Please enter the new test question." name="testQuestion2" required value="<?php echo ['testQuestion2'];?>" />
			</p>
			<p> Test Question 3:
				<input type="text" placeholder="Please enter the new test question." name="testQuestion3" required value="<?php echo ['testQuestion3'];?>" />
			</p>
			<p> Test Question 4:
				<input type="text" placeholder="Please enter the new test question." name="testQuestion4" required value="<?php echo ['testQuestion4'];?>" />
			</p>
			<p> Test Question 5:
				<input type="text" placeholder="Please enter the new test question." name="testQuestion5" required value="<?php echo ['testQuestion5'];?>" />
			</p>
			<p> Test Answer 1:
				<input type="text" placeholder="Please enter the new test answer." name="testAnswer1" required value="<?php echo ['testAnswer1'];?>" />
			</p>
			<p> Test Answer 2:
				<input type="text" placeholder="Please enter the new test answer." name="testAnswer1" required value="<?php echo ['testAnswer2'];?>" />
			</p>
			<p> Test Answer 3:
				<input type="text" placeholder="Please enter the new test answer." name="testAnswer1" required value="<?php echo ['testAnswer3'];?>" />
			</p>
			<p> Test Answer 4:
				<input type="text" placeholder="Please enter the new test answer." name="testAnswer1" required value="<?php echo ['testAnswer4'];?>" />
			</p>
			<p> Test Answer 5:
				<input type="text" placeholder="Please enter the new test answer." name="testAnswer1" required value="<?php echo ['testAnswer5'];?>" />
			</p>
			<p> Pass Rate:
				<input type="text" placeholder="Please enter the new pass rate." name="passRate" required value="<?php echo ['passRate'];?>" />
			</p>
			<button type="submit" name="submit" value="Update"/> Update</button>
		</form> </br>
		
		<a href="TestVersion.php">Back</a>
	<?php	} ?>
</div>
</body>

