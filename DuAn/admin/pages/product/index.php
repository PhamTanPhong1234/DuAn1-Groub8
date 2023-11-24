<?php
$servername = "127.0.0.1:3309";
$username = "root";
$password = "";
$dbname = "duan";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

// Khởi tạo mảng để lưu trữ dữ liệu
$menuItems = array();

// Kiểm tra kết quả truy vấn
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $menuItems[] = $row;
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        a {
            display: block;
            text-align: center;
            margin: 20px 0;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #4caf50;
            color: #fff;
        }

        td img {
            width: 100px; 
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
        }

        td a {
            display: inline-block;
            padding: 6px 10px;
            background-color: #4caf50;
            color: #fff;
            text-decoration: none;
            border-radius: 3px;
            transition: background-color 0.3s;
        }

        td a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Các Món ăn</h2>
    <a href="addProduct.php">Them san pham</a>
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã món ăn</th>
                <th>Hình Ảnh</th>
                <th>Name</th>
                <th>Price</th>
                <th>Chỉnh sửa</th>
                <th>Xoá sản phẩm</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $stt = 1;
            foreach ($menuItems as $item) {
                echo "<tr>";
                echo "<td>{$stt}</td>";
                echo "<td>{$item['id']}</td>";
                echo "<td><img src=".$item['productImage']."></td>";
                echo "<td>{$item['productName']}</td>";
                echo "<td>{$item['productPrice']}</td>";
                echo "<td>";
                echo " <a href='update.php?id=" . $item['id'] ."'>Sửa</a> ";
                echo "</td>";
                echo "<td>";
                echo " <a href='delete.php?id=" . $item['id'] ."'>Xóa</a> ";
                echo "</td>";
                echo "</tr>";
                $stt ++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>
