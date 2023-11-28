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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $newName = $_POST['new_name'];
    $newPrice = $_POST['new_price'];
    $newImage = $_POST['new_image'];
    $sql = "UPDATE products SET productName='$newName', productPrice='$newPrice', productImage='$newImage' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Lỗi: " . $conn->error;
    }
}

$conn->close();
?>
