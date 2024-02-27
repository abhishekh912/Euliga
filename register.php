<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "User_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Hash the password (for security, use password_hash() in a real-world scenario)
    $hashed_password = md5($password);

    $sql = "INSERT INTO users (firstname, lastname, username, password) VALUES ('$firstname', '$lastname', '$username', '$hashed_password')";
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
echo '<br><a href="register.html">Go back to sign up page</a>';
?>
