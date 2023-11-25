<?php
include "../config/connectt.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    // $conn = connect_db();

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
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../icon/themify-icons/themify-icons.css">
    <style>
        body {
            font-family: Open Sans;
            background: url('../images/Rhythms-Restaurant4.jpg') center center no-repeat;
            background-size: 100%;
            margin: 0;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            height: 100%;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background: rgb(0, 67, 51);
            background: linear-gradient(90deg, rgba(0, 67, 51, 0.00110185382746848) 0%, rgba(0, 67, 51, 0.5024744028470763) 29%, rgba(0, 67, 51, 0.880625663351278) 59%, rgba(0, 67, 51, 1) 100%);
            width: 50%;
            float: right;
            width: 80%;
        }



        form {
            margin-top: 2em;
            margin-right: 30px;
            width: 450px;
            float: right;
            color: white;

        }

        .logo {

            text-align: center;
        }

        img {
            width: 70%;

        }

        h1 {
            text-transform: uppercase;
            font-weight: 500;
            letter-spacing: 2px;
            width: 100%;
            text-align: center;
        }


        input {
            margin: 10px 20px;
            padding-bottom: 5px;
            width: 90%;
            height: 25px;
            border-top: none;
            border-right: none;
            border-left: none;
            background: transparent;
            border-bottom: 1px solid #fff;
            color: white;
            font-size: 20px;
            transition: 0.3s;
        }

        input:focus {
            outline: none;
            border-bottom: 1px solid #23AD4A;
        }


        input[type="submit"] {
            margin-top: 35px;
            font-family: Open Sans;
            letter-spacing: 2px;
            margin-left: 20px;
            width: 91%;
            height: 40px;
            background-color: rgba(0, 50, 51, 1);
            color: #fff;
            font-size: 1em;
            font-weight: 400;
            border: 2px solid rgba(0, 50, 51, 1);
            cursor: pointer;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background: none;
            border: 2px solid #cdcdcd;

        }
        ::placeholder{
            font-size: 12px;
                color: white;
                font-weight: 200;
            }
        h4 {
            width: 100%;
            text-align: center;
            font-weight: 300;
        }

        h4 a {
            margin-left: 5px;
            color: #23AD4A;

        }

        .back {
            width: 20%;
        }

        .home {
            color: #fff;
            font-size: 12px;
            text-decoration: none;
            padding: 10px;
        }

        .home i {
            margin-left: 10px;
        }

        .home:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <a class="home" href="home.php"><i class="ti-arrow-left"></i>
        Quay Lại Trang Chủ
    </a>
    <div class="container">
        <form action="login.php" method="post">
            <div class="logo"><img src="../images/Logo.png" alt=""></div>
            <h1>Đăng ký</h1>

            <input type="text" id="username" name="username" required placeholder="Tên Tài Khoản">
            <input type="password" id="password" name="password" required placeholder="Mật Khẩu">
            <br>
            <input type="password" id="confirm" name="confirm" required placeholder="Nhập Lại Mật Khẩu">
            <br>
    
            <input type="text" id="number" name="number" required placeholder="Số Điện Thoại">
            <br>

            <input type="email" id="email" name="email" required placeholder="Email">
            <br>
            <input type="submit" value="Đăng Ký">
            <br>

            <h4>Bạn Đã Có Tài Khoản <a href="./login.php">Đăng Nhập</a></h4>
        </form>
    </div>
</body>

</html>