<?php
session_start();

$servername = "localhost";
$username = "root"; // Corrected variable name
$password = "";
$dbname = "picture";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$email = mysqli_real_escape_string($conn, $_POST['email']); // Sanitize user input
$password = mysqli_real_escape_string($conn, $_POST['password']); // Sanitize user input

// Hash password for comparison
$hashed_password = hash('sha256', $password);

$sql = "SELECT * FROM registrations WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    if (hash_equals($row['password'], $hashed_password)) {
        $_SESSION['email'] = $email;
        exit();
    } else {
        echo "Invalid email or password";
    }
} else {
    echo "Invalid email or password";
}

mysqli_close($conn);
?>
