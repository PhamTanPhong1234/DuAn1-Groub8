<?php
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "duan";

$conn = new mysqli($severname, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['trangThai']) && isset($_POST['maDH'])) {
        $trangThaiArray = $_POST['trangThai'];
        $maDHArray = $_POST['maDH'];

       

        // Lặp qua mảng để thực hiện các thao tác cập nhật
        for ($i = 0; $i < count($trangThaiArray); $i++) {
            $trangThai = $conn->real_escape_string($trangThaiArray[$i]);
            $maDH = $conn->real_escape_string($maDHArray[$i]);

            // Thực hiện truy vấn cập nhật
            $updateQuery = "UPDATE donOnline SET trangThai = '$trangThai' WHERE maDH = '$maDH'";
            if ($conn->query($updateQuery) === TRUE) {
                echo "Cập nhật trạng thái thành công!";
            } else {
                echo "Lỗi cập nhật trạng thái: " . $conn->error;
            }
        }
    } else {
        echo "Dữ liệu không hợp lệ!";
    }
}

$conn->close();
?>
