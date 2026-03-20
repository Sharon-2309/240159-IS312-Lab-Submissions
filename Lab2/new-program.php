<?php
/*
Author: Sharon PETER
Date: 16 March 2025
Unit: IS312 Web Application Development
*/

$conn = new mysqli("localhost","root","","FRU10");

if ($conn->connect_error) {
    die("Connection failed");
}

$code = $_POST['code'];
$name = $_POST['name'];

$sql = "INSERT INTO Program VALUES ('$code','$name')";

if ($conn->query($sql) === TRUE) {
    echo "<h3>Program added successfully</h3>";
} else {
    echo "<h3>Error adding program</h3>";
}

$conn->close();
?>

<br>
<a href="index.php">Back to Home</a>