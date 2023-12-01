<?php

include "../config/connectt.php";

$conn = connect_db();


try {
   

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $num_of_guest = $_POST["soluong"];
        $booking_date = date('Y-m-d', strtotime($_POST["ngay"]));
        $booking_time = $_POST["gio"];
        $selected_food = $_POST["foodSelection"];
        

        $sql = "INSERT INTO khachAndanh (names, phone, email, soluongKhach, ngayDat, times,luaChon) VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $phone);
        $stmt->bindParam(3, $email);
        $stmt->bindParam(4, $num_of_guest);
        $stmt->bindParam(5, $booking_date);
        $stmt->bindParam(6, $booking_time);
        $stmt->bindParam(7, $selected_food);

        $stmt->execute();

        header("Location: ../index.php?action=booking_contact");
        
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Đóng kết nối
$conn = null;
?>
