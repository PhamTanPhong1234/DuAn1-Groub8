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
    $product_sql = "DELETE FROM gallery  WHERE id = $id";

    //nếu thực hiện được câu lệnh
    if ($conn->query($product_sql)) {
        header("Location: gallery_img.php");
    } else {
        echo "Error";
    }
}

$conn->close();