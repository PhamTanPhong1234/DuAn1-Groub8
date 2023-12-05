<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "duan";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}

// Bảo mật với SQL Injection
$stmt = $conn->prepare("INSERT INTO dsMon (hinhAnh, tenMon, giaTien, quantity, maHang) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssdss", $hinhAnh, $tenMon, $giaTien, $quantity, $maDh);

// Kiểm tra và thực hiện truy vấn khi nhận được POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $menuItem = isset($_POST['menuItem']) ? json_decode($_POST['menuItem'], true) : [];
    $quantities = $_POST['quantity'];

    if (!empty($menuItem)) {
        // Thực hiện các bước xử lý với mỗi mục trong mảng $quantityArray
        foreach ($menuItem as $index => $item) {
            // Đảm bảo rằng dữ liệu đầu vào được kiểm tra và là an toàn
            $hinhAnh = htmlspecialchars($item['hinhAnh']);
            $tenMon = htmlspecialchars($item['tenMon']);
            $giaTien = floatval($item['giaTien']); // Chuyển đổi giá tiền thành số
            $quantity = intval($quantities[$index]); // Lấy giá trị số lượng từ mảng $quantities
            $maDh = ($_POST['maDonHang']);

            // Bảo mật với SQL Injection
            $stmt->execute();

            // Kiểm tra kết quả khi thực hiện truy vấn
            if ($stmt->error) {
                echo "Lỗi: " . $stmt->error;
            }
        }

        // Đóng statement sau khi sử dụng
        $stmt->close();
    }
}


// Xử lý dữ liệu từ form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ $_POST
    // $totalAmount = $_POST["totalAmount"];
    $cleanedAmount = str_replace('.', '', $_POST["totalAmount"]);

    $totalAmount = intval($cleanedAmount);

    $address = $_POST["address"];
    $orderCode = $_POST["orderCode"];
    $customerName = $_POST["customerName"];

    // Chèn dữ liệu vào bảng orders
    $insertOrderSql = "INSERT INTO donOnline (tenKH, Dchi, maDsmon, tongTien ,trangThai) VALUES ('$customerName', '$address', '$orderCode', '$totalAmount','0')";

    if ($conn->query($insertOrderSql) === TRUE) {
        echo "Dữ liệu được chèn thành công vào database.";
    } else {
        echo "Lỗi: " . $insertOrderSql . "<br>" . $conn->error;
        echo "SQL: " . $insertOrderSql->sql . "<br>";

    }
}
// Đóng kết nối
$conn->close();
?>
