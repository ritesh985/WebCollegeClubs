<html>
<body>
<?php


$servername = "localhost";
$username = "root";
$password = "user";
$dbname = "clubs";
$name =$_POST["name"];
$email = $_POST["email"];
//$phno =  $_POST["phno"];
//$club =  $_POST["club"];
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

	//$name = $_POST["name"];
	//$email = $_POST["email"];
	$query = "select * from gecaClubs where name='$name' and email='$email'";      
        $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
        $count = mysqli_num_rows($result);
	
        if($count == 1){
         echo "<a href='../index.php'><input type='button'  value='Proceed'></a>";
        }else{
        echo "invalid login...";
	echo "<a href='Login.php'><input type='button'  value='Retry'></a>";
}
$conn->close();
?>


</body>
</html>
