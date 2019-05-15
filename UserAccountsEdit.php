<?php
include 'config.php';
include "session.php";

$id = $_REQUEST['ID'];

$query = "SELECT * FROM useraccount WHERE userAccountID = '.$id.'";
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
			$firstName = $_REQUEST['firstName'];
			$secondName = $_REQUEST['secondName'];
			$contactNumber = $_REQUEST['contactNumber'];
			$email = $_REQUEST['email'];
			$password = $_REQUEST['password'];
			$accountType = $_REQUEST['accountType'];
			
			$update = "UPDATE useraccount SET firstName ='".$firstName."', secondName = '".$secondName."', contactNumber = '".$contactNumber."', email = '".$email."', password = '".$password."' ";
			mysqli_query($link, $update) or die(mysqli_error());
			
			echo 'Update Successful!!!!';
		} else {
			?>
			
		<form action="" method="POST">
			<input type="hidden" placeholder="" name="new" value="1"/>
			<input type="hidden" placeholder="" name="id" value="<?php echo['id'] ?>" />
			<p> First Name:
				<input type="text" placeholder="" name="firstName" required value="<?php echo ['firstName'];?>" />
			</p>
			<p> Second Name:
				<input type="text" placeholder="Please enter the new second name." name="secondName" required value="<?php echo ['secondName'];?>" />
			</p>
			<p> Contact Number:
				<input type="text" placeholder="Please enter the new contact number." name="contactNumber" required value="<?php echo ['contactNumber'];?>" />
			</p>
			<p> Email:
				<input type="text" placeholder="Please enter the new email." name="email" required value="<?php echo ['email'];?>" />
			</p>
			<p> Password:
				<input type="text" placeholder="Please enter the new password." name="password" required value="<?php echo ['password'];?>" />
			</p>
			<p> 
				<input type="hidden" placeholder="" name="accountType" value="<?php echo ['accountType'];?>" />
			</p>
			<button type="submit" name="submit" value="Update"/> Update</button>
		</form> </br>
		
		<a href="UserAccounts.php">Back</a>
	<?php	} ?>
</div>
</body>

