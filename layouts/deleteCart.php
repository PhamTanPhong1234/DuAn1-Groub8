<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "duan";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "DELETE FROM gioHang WHERE id = $id";
    
    if ($conn->query($sql) === TRUE) {

        header("Location: cart.php");

    } else {
        echo "Lỗi: " . $conn->error;
    }
}

$conn->close();
?>
