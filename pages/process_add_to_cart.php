<?php

session_start();




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kết nối đến database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "duan";

    $conn = new mysqli($servername, $username, $password, $dbname);


    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Lấy dữ liệu từ $_POST
    $productId = $_POST['productId'];
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $productImage = $_POST['productImage'];
    $username = $_POST['username'];


    // Tạo câu lệnh SQL
    $sql = "INSERT INTO gioHang (tenMon,giaTien,soLuong,maMon,maKHdat,hinhAnh) 
            VALUES ('$productName', '$productPrice','1', '$productId','$username', '$productImage')";

    // Thực hiện thêm vào database
    if ($conn->query($sql) === TRUE) {
        header("Location: {$_SERVER['HTTP_REFERER']}");
    exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Đóng kết nối
    $conn->close();
}
?>
