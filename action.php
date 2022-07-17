<?php

$servername = "localhost";
$username = "root";
$password = "Got@chance1";

// Create connection
$conn = new mysqli($servername, $username, $password, "mobile");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$sql = "SELECT id, email, mobile FROM clients";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["email"]. " " . $row["mobile"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

echo "hello from PHP"
?>
