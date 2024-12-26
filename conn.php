<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ex1";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "เชื่อมต่อข้อมูลสำเร็จ";
} catch(PDOException $e) {
  echo "เชื่อมต่อข้อมูลมีปัญหา: " . $e->getMessage();
}




?>