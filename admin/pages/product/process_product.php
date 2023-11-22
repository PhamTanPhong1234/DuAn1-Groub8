<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "duan";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if (!$conn) {
    die("Kết nối không thành công");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

    $productName = $_POST["productName"];
    $productPrice = $_POST["productPrice"];
    $productImage = $_POST["productImage"];

    $sql = "INSERT INTO products (productName, productPrice, productImage) VALUES (:productName, :productPrice, :productImage)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':productName', $productName);
    $stmt->bindParam(':productPrice', $productPrice);
    $stmt->bindParam(':productImage', $productImage);

    if ($stmt->execute()) {
        
        header("Location: index.php");

    } else {
        echo "Có lỗi xảy ra khi thêm sản phẩm.";
    }

    $conn = null;
} else {
    echo "Yêu cầu không hợp lệ.";
}
?>
