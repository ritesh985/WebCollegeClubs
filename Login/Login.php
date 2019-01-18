<html>
<head>
<meta charset="UTF-8">
<title>Login form</title>
<link rel="stylesheet" href="style.css">

</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "user";
$dbname = "clubs";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->close();
?>

<div class="loginBox" class="user">
<img src="anatol-lem-186853.jpg" class="avatar">
<h2>LOGIN</h2>
<form method = "post" action="Loggin.php">
	<p>Username</p>
	<input type="text" name="name" required = "" id=1  >

	<p>Password</p>
	<input type="Password" name="email" required= "" id=2>


	 <input type="submit" name="submit" value="Submit">
	 <a href="Register1.php"><input type="button"  value="Register">Register</a>
	<a href="#">Forgot password?</a>
<script> function manipu(){
getElementByID("1").

}	
	
	
</form>
</div>
	
</body>
</html>
