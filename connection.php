<?php
$servername = "mysql:host=localhost;dbname=patients";
$username = "root";
$password = "root";

try {
  $conn = new PDO($servername, $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
} catch(Exception $error) {
  echo "Connection failed: " . $error->getMessage();
}
?>