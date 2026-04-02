<?php
$con=mysqli_connect("localhost","root","Ushindi123!","april2");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT * FROM records");
while($row = mysqli_fetch_array($result)) {
echo $row['Name'] . " " . $row['Address']." ".$row['Country']." ".$row['Position']." ".$row['Salary'];
echo "<br>";
}
mysqli_close($con);
?>