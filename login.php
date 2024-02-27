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
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Hash the password (should match the hashing used during registration)
    $hashed_password = md5($password);

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$hashed_password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Login successful!";
        header("location:home.php");
    } else {
        echo "Login failed. Invalid username or password.";

       
    }
} 
$conn->close();

echo '<br><a href="index.html">Go back to login page</a>';
?>
