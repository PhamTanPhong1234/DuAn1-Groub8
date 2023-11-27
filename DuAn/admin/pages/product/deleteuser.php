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
    $userList_sql = "DELETE FROM users WHERE id = $id";
    //nếu thực hiện được câu lệnh
    if ($conn->query($userList_sql)) {
        header("Location: user_list.php");
    } else { 
        echo 'lỗi';
    }
}

$conn->close();
