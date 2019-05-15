<?php
include 'config.php';
include "session.php";

$id = $_REQUEST['id'];

$query = "DELETE FROM testversion WHERE id=$id";
$result = mysqli_query($link, $query) or die (mysqli_error());
header("Location: TestVersion.php")

?>