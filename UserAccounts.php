<?php
include 'config.php';
include "session.php";

$sql = "SELECT * FROM useraccount";
$result = $link->query($sql);
?>

<!doctype html>
<body>

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
<h1> User Accounts </h1>
<table>
	<tr>
	<td> User Account ID </td>
	<td> First Name </td>
	<td> Second Name</td>
	<td> Contact Number</td>
	<td> Email</td>
	<td> Password</td>
	<td> Account Type</td>
	</tr>
	
	<?php
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			?>
			
			<tr>
				<td><?php echo $row['userAccountID']; ?> </td> 
				<td><?php echo $row['firstName']; ?> </td> 
				<td><?php echo $row['secondName']; ?> </td> 
				<td><?php echo $row['contactNumber']; ?> </td> 
				<td><?php echo $row['email']; ?> </td>
				<td><?php echo $row['password']; ?> </td> 
				<td><?php echo $row['accountType']; ?> </td> 
			</tr>
			<?php  
		}
	} else
	{
		?>
		<tr>
			<th> Cannot find data! </th>
		</tr>
		<?php
	}
	?>
</table>

<h3> Edit: Please Enter ID of entry. </h3></br>
	<form action="UserAccountsEdit.php" method="POST">
		<input type="text" placeholder="ID.." name="ID"/>
		<button type="submit" name="submit" value="show me">Edit</button>
	</form> </br>
<h3> Delete: Please Enter ID of entry. </h3></br>
	<form action="UserAccountsDelete.php" method="POST">
		<input type="text" placeholder="ID.." name="ID"/>
		<button type="submit" name="submit" value="show me">Edit</button>
	</form> </br>

<a href="AccountManagementAdmin.php">Back</a>
</div>
</body>
</html>