<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "nippon_database";

// Create new connnection.
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connnection.
if($conn -> connect_error){
  die("Connection failed: " . $conn->connect_error);
}

$temp = $_REQUEST["fieldname"];

$sqlGetData = "SELECT fieldcontent FROM IndexTable WHERE fieldname = '$temp'";

$result = $conn->query($sqlGetData);

$row = mysqli_fetch_array($result);

if ($result> 0) {
    echo $row[0];
} else {
    echo "0 results";
}

$conn->close();
 ?>
