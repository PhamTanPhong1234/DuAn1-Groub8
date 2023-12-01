<?php
// Khởi động session
session_start();

// Xóa tất cả các biến session
session_unset();

// Hủy session
session_destroy();

// Chuyển hướng đến trang mới sau khi logout thành công
header("Location: login.php");
exit();
?>
