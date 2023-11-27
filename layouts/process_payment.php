<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "duan";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Lấy dữ liệu từ form
    $totalAmountStr = $_POST['tongtien'];
    $totalAmountStr = str_replace(',', '', $totalAmountStr);
    $totalAmountStr = str_replace('.', '', $totalAmountStr);

// Chuyển đổi thành kiểu số
    $totalAmount = floatval($totalAmountStr);
    $quantity = $_POST['quantityCart'];
    $selectedDate = date('Y-m-d', strtotime($_POST["date"]));
    $Name = $_POST['userNamee'];

    // Thực hiện thêm vào database
    $sql = "INSERT INTO donhang (tenKh,tongTien,ngayDat,soKhach) 
            VALUES ('$Name', '$totalAmount', '$selectedDate', '$quantity')";

    if ($conn->query($sql) === TRUE) {
        header("Location: {$_SERVER['HTTP_REFERER']}");


    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
