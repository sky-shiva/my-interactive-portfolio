<?php
$servername = "localhost";
$username = "root";
$password = "shiva7781";
$dbname = "web";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data safely
$name = $_POST['Name'];
$email = $_POST['Email'];
$message = $_POST['Message'];

// Insert into database
$sql = "INSERT INTO contacts (name, email, message)
        VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "<h2 style='color:white; background:#0f172a; padding:20px'>
          Message sent successfully 🚀</h2>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
