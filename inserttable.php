<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpDb";


$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Ankit', 'Kumar', 'ankit@gmail.com')";

if (mysqli_query($conn, $sql)) 
{
  echo "New record created successfully";
} 
else
{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>