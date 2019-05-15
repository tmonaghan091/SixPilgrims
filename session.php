<?php
include('config.php');
session_start();
$currentUser = $_SESSION['email'];
 
$sql = mysqli_query($link,"SELECT email FROM useraccount WHERE email='$currentUser' ");
 
$row = mysqli_fetch_array($sql,MYSQLI_ASSOC);
 
$currentUser = $row['email'];
 
if(!isset($currentUser))
{
header("Location: login.html");
}
?>