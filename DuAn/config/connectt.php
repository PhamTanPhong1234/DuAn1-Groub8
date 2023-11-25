<?php
// Trong file connect.php


function connect_db() {
    $servername = "127.0.0.1:3309    ";
    $username = "root";
    $password = "";
    $dbname = "duan";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn; // Trả về đối tượng kết nối
    } catch (PDOException $e) {
        echo "Kết nối không thành công: " . $e->getMessage();
        return null;
    }
}
?>
