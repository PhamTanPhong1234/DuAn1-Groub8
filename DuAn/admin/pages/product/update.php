<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

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

    $sql = "SELECT * FROM products WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Hiển thị form cập nhật với dữ liệu cũ
        echo "<form action='update_process.php' method='post'>";
        echo "<h2>Cập Nhật Sản Phẩm</h2>";
        echo "<input type='hidden' name='id' value='$id'>";
        echo "Tên mới: <input type='text' name='new_name' value='{$row['productName']}'><br>";
        echo "Giá mới: <input type='text' name='new_price' value='{$row['productPrice']}'><br>";
        echo "Ảnh mới: <input type='text' name='new_image' value='{$row['productImage']}'><br>";
        echo "<img src='{$row['productImage']}' alt='Product Image'><br>";
        echo "<input type='submit' value='Cập nhật'>";
        echo "</form>";
    } else {
        echo "Không tìm thấy dữ liệu.";
    }
}

$conn->close();
?>
</body>
</html>
