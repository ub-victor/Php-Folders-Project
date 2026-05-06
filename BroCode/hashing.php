$password = "Ushindi@23!";

$hash = password_hash($password, PASSWORD_DEFAULT);

echo $hash;