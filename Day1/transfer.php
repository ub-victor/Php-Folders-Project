<?php
// pull all employee records and display in table
$con = mysqli_connect("localhost", "root", "Ushindi123!", "april2");
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

$query = "SELECT id, Names, Address, Country, Position, Salary FROM records ORDER BY id DESC";
$result = mysqli_query($con, $query);
if (!$result) {
    die("Query failed: " . mysqli_error($con));
}

$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Records</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #fafafa; margin: 20px; }
        h1 { color: #333; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 8px 12px; text-align: left; }
        th { background-color: #f0f0f0; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        .message { margin-top: 20px; color: #555; }
        .back { display: inline-block; margin-top: 20px; color: #ffffff; background: #007BFF; padding: 10px 14px; text-decoration: none; border-radius: 4px; }
        .back:hover { background: #0056b3; }
    </style>
</head>
<body>
    <h1>Employee Records</h1>
    <?php if (count($rows) === 0): ?>
        <p class="message">No records found. Please register a new employee first.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Country</th>
                    <th>Position</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row) : ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['id']); ?></td>
                        <td><?php echo htmlspecialchars($row['Names']); ?></td>
                        <td><?php echo htmlspecialchars($row['Address']); ?></td>
                        <td><?php echo htmlspecialchars($row['Country']); ?></td>
                        <td><?php echo htmlspecialchars($row['Position']); ?></td>
                        <td><?php echo htmlspecialchars($row['Salary']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

    <a class="back" href="index.html">Back to Registration</a>
</body>
</html>
<?php mysqli_close($con); ?>