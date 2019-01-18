

 <?php
$servername = "localhost";
$username = "root";
$password = "user";
$dbname = "clubs";
//$name =$_POST["username"];
//$email = $_POST["email"];
//$phno =  $_POST["phno"];
//$club =  $_POST["club"];
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}
$sql = "select awards from achievements";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
$display=mysqli_fetch_array($result);

//if($final==""){$final="Go explore and achieve something";}
if ($conn->query($sql) == TRUE) {
//mysqli_query($conn,'select awards from achievements');
    while($row=mysqli_fetch_array($result)){
   // echo "<tr>";
    echo "<p>".$row[0]."</p>";
    //echo "</tr>";
}

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>
