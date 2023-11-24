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
$error_message ="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql_admin = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result_admin = $conn->query($sql_admin);
    //so hang lon hon khong
    if ($result_admin->num_rows > 0) {
        header("Location: ../indexAdmin.php");
    } else {
        $sql_users = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result_users = $conn->query($sql_users);

        if ($result_users->num_rows > 0) {
            header("Location: ../index.php");
        } else {
            $error_message = "Tên đăng nhập hoặc mật khẩu không đúng.";
        }
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://bizmansky.vn/image/catalog/logo/logo-fav.png" rel="icon" />
    <link rel="shortcut icon" href="../images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../icon/themify-icons/themify-icons.css">


    <style>
        body {
            font-family: Open Sans;
            background: url('../images/imager_11_20248_700.jpg') bottom center no-repeat;
            margin: 0;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            height: 100%;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background: rgb(0, 67, 51);
            background: linear-gradient(90deg, rgba(0, 67, 51, 0.07110185382746848) 0%, rgba(0, 67, 51, 0.5024744028470763) 29%, rgba(0, 67, 51, 0.880625663351278) 59%, rgba(0, 67, 51, 1) 100%);
            width: 50%;
            float: right;
            width: 80%;
        }



        form {
            margin-top: 5%;
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
            margin: 15px 20px;
            width: 90%;
            height: 40px;
            border-top: none;
            border-right: none;
            border-left: none;
            background: transparent;
            border-bottom: 1px solid #fff;
            color: white;
            font-size: 20px;
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

        ::placeholder {
            color: white;
            font-weight: 300;

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

        #error-message {
            color: red;
            margin-top: 10px;
            font-size: 14px;
            text-align: center;
        }
    </style>
</head>

<body>
    <a class="home" href="../index.php"><i class="ti-arrow-left"></i>
        Quay Lại Trang Chủ
    </a>
    <div class="container">
        <form action="login.php" method="post">
            <div class="logo"><img src="../images/Logohanquoc.png" alt=""></div>
            <h1>Đăng Nhập</h1>


            <input type="text" id="username" name="username" required placeholder="Tên Tài Khoản">
            <br>


            <input type="password" id="password" name="password" required placeholder="Mật Khẩu">
            <br>
            <div id="error-message" style="color: red;"><?php echo $error_message ?></div>

            <input type="submit" value="Đăng Nhập">
            <br>

            <h4>Chưa Có Tài Khoản <a href="./resgister.php">Đăng Kí Ngay</a></h4>
        </form>
    </div>
</body>

</html>