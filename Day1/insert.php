<?php
$con=mysqli_connect("localhost","root","Ushindi123!","april2");
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
$sql="INSERT INTO records (Names Addresse, Country, Position, Salary)
VALUES ('$name', '$address', '$country', '$position', '$salary')";
if (!mysqli_query($con,$sql)) {
die('Error: ' . mysqli_error($con));
}
echo "1 record added";mysqli_close($con);?>