<?php
// Check if this is a POST request
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    die('Invalid request method');
}

// Initialize variables
$name = $address = $country = $position = $salary = "";
$error = "";

// Check if all required fields are set
if (!isset($_POST['nam']) || !isset($_POST['add']) || !isset($_POST['coun']) || !isset($_POST['pos']) || !isset($_POST['sal'])) {
    die('Error: Missing required fields');
}

// Connect to database
$con = mysqli_connect("localhost", "root", "Ushindi123!", "april2");

// Check connection
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

// Escape variables for security
$name = mysqli_real_escape_string($con, $_POST['nam']);
$address = mysqli_real_escape_string($con, $_POST['add']);
$country = mysqli_real_escape_string($con, $_POST['coun']);
$position = mysqli_real_escape_string($con, $_POST['pos']);
$salary = mysqli_real_escape_string($con, $_POST['sal']);

// Check if any field is empty
if (empty($name) || empty($address) || empty($country) || empty($position) || empty($salary)) {
    die('Error: All fields are required');
}

// Insert into database
$sql = "INSERT INTO records (Names, Address, Country, Position, Salary) VALUES ('$name', '$address', '$country', '$position', '$salary')";

if (!mysqli_query($con, $sql)) {
    die('Error: ' . mysqli_error($con));
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Success</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f0f8ff; }
        .success-box { 
            background-color: #4CAF50; 
            color: white; 
            padding: 20px; 
            margin: 20px; 
            border-radius: 5px; 
            text-align: center;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }
        .success-box h2 { margin: 0 0 15px 0; }
        .details { background-color: white; color: black; padding: 15px; margin-top: 15px; border-radius: 3px; text-align: left; }
        .details p { margin: 8px 0; }
        .back-link { display: inline-block; margin-top: 15px; padding: 10px 20px; background-color: #008CBA; color: white; text-decoration: none; border-radius: 3px; }
        .back-link:hover { background-color: #007399; }
    </style>
</head>
<body>
    <div class="success-box">
        <h2>✓ Employee Record Saved Successfully!</h2>
        <div class="details">
            <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
            <p><strong>Address:</strong> <?php echo htmlspecialchars($address); ?></p>
            <p><strong>Country:</strong> <?php echo htmlspecialchars($country); ?></p>
            <p><strong>Position:</strong> <?php echo htmlspecialchars($position); ?></p>
            <p><strong>Salary:</strong> <?php echo htmlspecialchars($salary); ?></p>
        </div>
        <a href="index.html" class="back-link">Register Another Employee</a>
    </div>
</body>
</html>
<?php mysqli_close($con); ?>
<?php mysqli_close($con); ?>