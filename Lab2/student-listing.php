<?php
/*
Author: YOUR NAME
Date: 22 March 2025
Unit: IS312 Web Application Development
*/
$conn = new mysqli("localhost","root","","FRU10");
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Student Listing</title>
   
</head>
<body>
<div class="container">
<h2>Student Listing</h2>

<table border="1">
    <tr>
        <th>Student No</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Contact No</th>
        <th>Program Code</th>
    </tr>

<?php
$result = $conn->query("SELECT * FROM Student");

while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['StudentNo']."</td>";
    echo "<td>".$row['Firstname']."</td>";
    echo "<td>".$row['Lastname']."</td>";
    echo "<td>".$row['Gender']."</td>";
    echo "<td>".$row['ContactNo']."</td>";
    echo "<td>".$row['ProgramCode']."</td>";
    echo "</tr>";
}
$conn->close();
?>

</table>

<br>
<a href="index.php">Back to Home</a>
</div>
</body>
</html>