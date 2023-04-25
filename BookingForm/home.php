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
$txtHotelName = $_POST['txtHotelName'];
$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO `user` (`name`, `phnNo`, `member`,`HotelName`, `message`) VALUES ('$txtName', '$txtPhnNo', '$txtMember','$txtHotelName','$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted <br>Go Back";
}

?>