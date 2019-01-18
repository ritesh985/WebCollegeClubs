<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "user";
$dbname = "clubs";
$name =$_POST["name"];
$email = $_POST["email"];
$phno =  $_POST["phno"];
$club =  $_POST["club"];
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO gecaClubs (name, email, phno, club)
VALUES ('$name', '$email', '$phno','$club')";

if ($conn->query($sql) === TRUE) {
//    echo "New record created successfully";
?><a href="Login.php">Back to login page</a>
<?php   // echo "<html><body><a href="Login.php">Back to login page</a></body></html>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?> 
