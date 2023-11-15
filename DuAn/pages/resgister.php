<?php

include "../config/connect.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    $conn = connect_db();

    if ($conn) {
        try {
            $sql = "INSERT INTO users (username, password, phone, email) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);

            // Bind các tham số
            $stmt->bindParam(1, $username);
            $stmt->bindParam(2, $password);
            $stmt->bindParam(3, $phone);
            $stmt->bindParam(4, $email);

            $stmt->execute();

            echo "<p>Đăng ký thành công!</p>";
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
        } finally {
            $conn = null;
        }
    } else {
        echo "<p>Kết nối đến cơ sở dữ liệu thất bại.</p>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            color: #666;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>


<body>




<h2>Đăng Ký</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="username">Tên người dùng:</label>
    <input type="text" name="username" required>

    <br>

    <label for="password">Mật khẩu:</label>
    <input type="password" name="password" required>

    <br>

    <label for="phone">Số điện thoại:</label>
    <input type="tel" name="phone" required>

    <br>

    <label for="email">Email:</label>
    <input type="email" name="email" required>

    <br>

    <input type="submit" value="Đăng Ký">
</form>

</body>
</html>
