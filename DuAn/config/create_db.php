<?php
$servername = "127.0.0.1:3309";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE duan";
    $conn->exec($sql);
    echo "Database created successfully<br>";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }

?>