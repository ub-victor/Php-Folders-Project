<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <p >Welcome dear</p>
    <p>Your name is: <?php echo $_POST["name"]; ?></p>
    <br>
    <p>Your email is: <?php echo $_POST["email"]; ?></p>
    <br>
    <button onclick="window.location.href='phpForm.php'">Go Back</button>
</body>
</html>