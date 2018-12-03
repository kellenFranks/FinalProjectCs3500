<?php 
$servername = "cs3500_ImageDB.sql";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$Name = $_POST['username'];
$Email = $_POST['email'];

$sql = "INSERT INTO User (Name,Email) VALUES ('$Name','$Email')";
if(!mysql_query($con,$sql)) {
    echo 'Data not inserted';
} else {
    echo 'Data inserted';
}

?>