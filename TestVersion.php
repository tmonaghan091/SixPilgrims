<?php
include "config.php";
include "session.php";

$sql = "SELECT * FROM testversion";
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
<h1> Test Version </h1>
<table>
	<tr>
	<th> Test Version ID </th>
	<th> Test Title </th>
	<th> Test Question 1</th>
	<th> Test Question 2</th>
	<th> Test Question 3</th>
	<th> Test Question 4</th>
	<th> Test Question 5</th>
	<th> Test Answer 1</th>
	<th> Test Answer 2</th>
	<th> Test Answer 3</th>
	<th> Test Answer 4</th>
	<th> Test Answer 5</th>
	<th> Pass Rate</th>
	</tr>
	<?php
	
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			?>
			
			<tr>
				<th><?php echo $row['testVersionID']; ?> </th> 
				<th><?php echo $row['testTitle']; ?> </th> 
				<th><?php echo $row['testQuestion1']; ?> </th> 
				<th><?php echo $row['testQuestion2']; ?> </th> 
				<th><?php echo $row['testQuestion3']; ?> </th> 
				<th><?php echo $row['testQuestion4']; ?> </th> 
				<th><?php echo $row['testQuestion5']; ?> </th> 
				<th><?php echo $row['testAnswer1']; ?> </th> 
				<th><?php echo $row['testAnswer2']; ?> </th> 
				<th><?php echo $row['testAnswer3']; ?> </th> 
				<th><?php echo $row['testAnswer4']; ?> </th> 
				<th><?php echo $row['testAnswer5']; ?> </th> 
				<th><?php echo $row['passRate']; ?> </th> 
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
		<form action="TestVersionEdit.php" method="POST">
			<input type="text" placeholder="ID.." name="ID"/>
			<button type="submit" name="submit" value="show me">Edit</button>
		</form> </br>
	<h3> Delete: Please Enter ID of entry. </h3></br>
		<form action="TestVersionDelete.php" method="POST">
			<input type="text" placeholder="ID.." name="ID"/>
			<button type="submit" name="submit" value="show me">Edit</button>
		</form> </br>

	<a href="AccountManagementAdmin.php">Back</a>

</div>
</body>
</html>