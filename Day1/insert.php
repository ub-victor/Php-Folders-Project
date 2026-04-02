<?php
$con=mysqli_connect("localhost","root","Ushindi123!","auca");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
// escape variables for security
$name = mysqli_real_escape_string($con, $_POST['nam']);
$address = mysqli_real_escape_string($con, $_POST['add']);
$country = mysqli_real_escape_string($con, $_POST['coun']);
$position = mysqli_real_escape_string($con, $_POST['pos']);
$salary = mysqli_real_escape_string($con, $_POST['sal']);
$sql="INSERT INTO Persons (FirstName, LastName, Age)
VALUES ('$firstname', '$lastname', '$age')";
if (!mysqli_query($con,$sql)) {
die('Error: ' . mysqli_error($con));
}
echo "1 record added";mysqli_close($con);?>