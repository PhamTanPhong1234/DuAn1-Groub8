<?php
$servername = "127.0.0.1:3309
";
$username = "root";
$password = "";
$dbname = "duan";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $product_sql = "DELETE FROM products WHERE id = $id";
    $userList_sql = "DELETE FROM users WHERE id = $id";
    //nếu thực hiện được câu lệnh
    if ($conn->query($product_sql)) {
        header("Location: index.php");
    } else {
    $userList_sql = "DELETE FROM users WHERE id = $id"; {
        header("Location: user_list.php");
    }
}}

$conn->close();
