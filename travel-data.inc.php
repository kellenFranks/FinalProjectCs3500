<?php
$servername = "localhost";
$username = "username";
 $password = "password";
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully"; 
 }
catch(PDOException $e)
 {
echo "Connection failed: " . $e->getMessage();
 }

?>