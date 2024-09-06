<?php
 echo "welcome to the stage where we are ready to get connected to a database <br>";
 //way to connect MySQL Dtabase
 //1.MYSQLi extension->only mysql
 //2.PDO->connec with many data base
 $servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  // Create database
  $sql = "CREATE DATABASE phpDb";
  if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
  } else {
    echo "Error creating database: " . mysqli_error($conn);
  }
  
  mysqli_close($conn);
?>
