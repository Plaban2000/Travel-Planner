<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','bookingform');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// get the post records
$txtName = $_POST['txtName'];
$txtPhnNo = $_POST['txtPhnNo'];
$txtMember = $_POST['txtMember'];
$txtGroupName = $_POST['txtGroupName'];
$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO `trekgrp` (`name`, `phnNo`, `member`,`GroupName`, `message`) VALUES ('$txtName', '$txtPhnNo', '$txtMember','$txtGroupName','$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Your request has been sent";
}

?>