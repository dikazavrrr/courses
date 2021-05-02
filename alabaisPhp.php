


<?php
//connecting database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alabais";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Take the values from the Form
$fname=$_POST['fname'];
$num=$_POST['number'];
$emailid=$_POST['email'];

$sql = "INSERT INTO customer (fname, num,emailid)
VALUES ('$fname', '$num','$emailid')";

if ($conn->query($sql) === TRUE) {
    echo "Successfully registered";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>