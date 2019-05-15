<?php
include 'config.php';
include "session.php";

$sql = "SELECT * FROM userresults";
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
<h1> User Results </h1>
<table>
	<tr>
	<td> User Results ID </td>
	<td> User Account ID </td>
	<td> Test Version ID</td>
	<td> Result</td>
	</tr>
	<?php
	
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			?>
			
			<tr>
				<td><?php echo $row['userResultID']; ?> </td> 
				<td><?php echo $row['userAccountID']; ?> </td> 
				<td><?php echo $row['userVersionID']; ?> </td> 
				<td><?php echo $row['result']; ?> </td> 
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
<a href="AccountManagementAdmin.php">Back</a>
</div>
</body>
</html>