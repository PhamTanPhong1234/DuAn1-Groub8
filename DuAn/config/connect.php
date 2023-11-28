<?php
function connect_db() {
    $servername = "127.0.0.1:3309";
    $username = "root";
    $password = "";
    $dbname = "duan";

    // Kết nối đến MySQLi
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối không thành công: " . $conn->connect_error);
    }

    return $conn; // Trả về đối tượng kết nối
}

?>
